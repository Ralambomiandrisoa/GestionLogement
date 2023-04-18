<?php

namespace App\Controllers;
use App\Models\AgenceModel;
use App\Controllers\BaseController;

class Liste_Agence extends BaseController
{
    
    public function __construct()
    {
       helper(['url','form']) ;
    }
    public function form()
    {
        $session = session();

            $data["message"] = $session->getFlashdata("message");
       
        return view("agence", $data);
    }
    
    public function index()
    {
        $agenceModel = new \App\Models\AgenceModel();

        $data=['liste'=>$agenceModel->findAll()] ; 

        return view("Liste_agence", $data);
    }
    public function save()
    {
       $validation = $this->validate(
        [
            'nomag' =>[
                'rules'=>'required',
                'errors'=>[

                    'required'=>'Le nom agence'
                ]          
                  ] ,
                  'adresseag' =>[
                    'rules'=>'required',
                    'errors'=>[
    
                        'required'=>'Adresse agence'
                    ]          
                      ] ,
            'telag' => [
                'rules'=>'required',
                'errors'=>[

                    'required'=>'telephone'
                ]
                ],
               
            ],
            
            
        ); 
        if(!$validation){
            return view('agence',['validation' => $this->validator]);
        }
        elseif($validation){
            $nom_ag = $this->request->getPost('nomag');
            $adresse_ag = $this->request->getPost('adresseag');
            $tel = $this->request->getPost('telag');

            $values=[
                'nomag'=>$nom_ag,
                'adresseag'=>$adresse_ag,
                'telag'=>$tel,
                    ];
                    $agenceModel = new \App\Models\AgenceModel();
                  $query = $agenceModel->insert($values);
                  if(!$query){
                    return redirect()->to('ajouter_agence')->with('fail','enregistrement echoué');
                  }
                  else{
                   
                   return redirect()->to('ajouter_agence')->with('success','enregistré avec succés');
                  }
        }
        
    }
    public function edit($numag){
        $agenceModel = new \App\Models\AgenceModel();
        $data = [
            "nomag" =>$this->request->getPost(["nomag"]),
            'adresseag'=>$this->request->getPost(["adresseag"]),
            'telag'=>$this->request->getPost(["telag"]),
            
        ];
        $agenceModel->update($numag, $data);
        if(!$clientModel){
            return redirect()->back()->with('fail',' echec de mise à jour');
          }
          else{
           
            return redirect()->to('liste_agence')->with('success','mise à jour efféctué avec succés');
          }
    }
    public function modifier($numag)
    {  
            $clm = new \App\Models\AgenceModel();

            $Agence = $clm->find($numag);
            $data =
            [
                'title'=>'agence',
                'agence'=>$Agence
            ];
        return view("modif_agence",$data);
    }
    public function sup($numag){
        $clientModel = new \App\Models\AgenceModel();
        $clientModel->delete($numag);
        return redirect()->to('/liste_agence')->with('success','suppression avec succés');
    }
}