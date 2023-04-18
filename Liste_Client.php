<?php

namespace App\Controllers;
use App\Models\ClientModel;
use App\Controllers\BaseController;

class Liste_Client extends BaseController
{
    
    public function __construct()
    {
       helper(['url','form']) ;
    }
    public function form()
    {
        $session = session();

            $data["message"] = $session->getFlashdata("message");
       
        return view("client", $data);
    }
    
    public function index()
    {
        $clientModel = new \App\Models\ClientModel();

        $data=['liste'=>$clientModel->findAll()] ; 

        return view("liste_client", $data);
    }
    public function save()
    {
       $validation = $this->validate(
        [
            'nomcli' =>[
                'rules'=>'required',
                'errors'=>[

                    'required'=>'Le nom du client'
                ]          
                  ] ,
                  'prenomcli' =>[
                    'rules'=>'required',
                    'errors'=>[
    
                        'required'=>'Le prenom du client'
                    ]          
                      ] ,
            'sexe' => [
                'rules'=>'required',
                'errors'=>[

                    'required'=>'homme ou femme'
                ]
                ],
                'cincli' => [
                    'rules'=>'required|max_length[12]|min_length[12]',
                    'errors'=>[
    
                        'required'=>'Cin',
                        'max_length'=>'le cin doit être de 12 chiffres',
                        'min_length'=>'le cin doit être de 12 chiffres'
                    ]
                    ],
            'telcli' => [
                'rules'=>'required|max_length[10]|min_length[10]',
                'errors'=>[

                    'required'=> 'Telephone',
                    'max_length'=>'le numero telephone doit comporter de 10 chiffres',
                    'min_length'=>'le numero telephone doit comporter de 10 chiffres'
                    
                ]
            ],
            'adressecli' =>[
                'rules'=>'required',
                'errors'=>[

                    'required'=>'Adresse du client'
                ]          
                  ] ,
            ]
        ); 
        if(!$validation){
            return view('client',['validation' => $this->validator]);
        }
        elseif($validation){
            $nom_cli = $this->request->getPost('nomcli');
            $prenom_cli = $this->request->getPost('prenomcli');
            $fonction = $this->request->getPost('sexe');
            $cin = $this->request->getPost('cincli');
            $telephone = $this->request->getPost('telcli');
            $adresse_cli = $this->request->getPost('adressecli');

            $values=[
                'nomcli'=>$nom_cli,
                'prenomcli'=>$prenom_cli,
                'sexe'=>$fonction,
                'cincli'=>$cin,
                'telcli'=>$telephone,
                'adressecli'=>$adresse_cli,
                    ];
                    $clientModel = new \App\Models\ClientModel();
                  $query = $clientModel->insert($values);
                  if(!$query){
                    return redirect()->to('ajouter_client')->with('fail','enregistrement echoué');
                  }
                  else{
                   
                   return redirect()->to('ajouter_client')->with('success','enregistré avec succés');
                  }
        }
        
    }
    public function edit($numcli){
        $clientModel = new \App\Models\ClientModel();
        $data = [
            "nomcli" =>$this->request->getPost(["nomcli"]),
            'prenomcli'=>$this->request->getPost(["prenomcli"]),
            'sexe'=>$this->request->getPost(["sexe"]),
            'cincli'=>$this->request->getPost(["cincli"]),
            'telcli'=>$this->request->getPost(["telcli"]),
            'adressecli'=>$this->request->getPost(["adressecli"]),
            
        ];
        $clientModel->update($numcli, $data);
        if(!$clientModel){
            return redirect()->back()->with('fail',' echec de mise à jour');
          }
          else{
           
            return redirect()->to('liste_client')->with('success','mise à jour efféctué avec succés');
          }
    }
    public function modifier($numcli)
    {  
            $clm = new \App\Models\ClientModel();

            $Client = $clm->find($numcli);
            $data =
            [
                'title'=>'client',
                'client'=>$Client
            ];
        return view("modif_client",$data);
    }
    public function sup($numcli){
        $clientModel = new \App\Models\ClientModel();
        $clientModel->delete($numcli);
        return redirect()->to('/liste_client')->with('success','suppression avec succés');
    }
}