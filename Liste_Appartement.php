<?php

namespace App\Controllers;
use App\Models\AppartementModel;
use App\Controllers\BaseController;

class Liste_Appartement extends BaseController
{
    
    public function __construct()
    {
       helper(['url','form']) ;
    }
    public function form()
    {
        $session = session();

            $data["message"] = $session->getFlashdata("message");
       
        return view("appartement", $data);
    }
    
    public function index()
    {
        $appartementModel = new \App\Models\AppartementModel();

        $data=['liste'=>$appartementModel->findAll()] ; 

        return view("Liste_appartement", $data);
    }
    public function save()
    {
       $validation = $this->validate(
        [
            'nomapp' =>[
                'rules'=>'required',
                'errors'=>[

                    'required'=>'Le nom appartement'
                ]          
                  ] ,
                  'pays' =>[
                    'rules'=>'required',
                    'errors'=>[
    
                        'required'=>'Pays appartement'
                    ]          
                      ] ,
            'adresseapp' => [
                'rules'=>'required',
                'errors'=>[

                    'required'=>'Adresse appartement'
                ]
                ],
                'nbpiece' =>[
                    'rules'=>'required',
                    'errors'=>[
    
                        'required'=>'Nombres des pieces'
                    ]          
                      ] ,
                      'prix' =>[
                        'rules'=>'required',
                        'errors'=>[
        
                            'required'=>'Prix appartement'
                        ]          
                          ] ,
               
            ],
            
            
        ); 
        if(!$validation){
            return view('agence',['validation' => $this->validator]);
        }
        elseif($validation){
            $nom_app = $this->request->getPost('nomapp');
            $Pays = $this->request->getPost('pays');
            $adresse = $this->request->getPost('adresseapp');
            $nbpc = $this->request->getPost('nbpiece');
            $Prix = $this->request->getPost('prix');

            $values=[
                'nomapp'=>$nom_app,
                'pays'=>$Pays,
                'adresseapp'=>$adresse,
                'nbpiece'=>$nbpc,
                'prix'=>$Prix,
                    ];
                    $appartementModel = new \App\Models\AppartementModel();
                  $query = $appartementModel->insert($values);
                  if(!$query){
                    return redirect()->to('ajouter_appartement')->with('fail','enregistrement echoué');
                  }
                  else{
                   
                   return redirect()->to('ajouter_appartement')->with('success','enregistré avec succés');
                  }
        }
        
    }
    public function edit($numapp){
        $appartementModel = new \App\Models\AppartementModel();
        $data = [
            "nomapp" =>$this->request->getPost(["nomapp"]),
            'pays'=>$this->request->getPost(["pays"]),
            'adresseapp'=>$this->request->getPost(["adresseapp"]),
            'nbpiece'=>$this->request->getPost(["nbpiece"]),
            'prix'=>$this->request->getPost(["prix"]),
            
        ];
        $appartementModel->update($numapp, $data);
        if(!$appartementModel){
            return redirect()->back()->with('fail',' echec de mise à jour');
          }
          else{
           
            return redirect()->to('liste_appartement')->with('success','mise à jour efféctué avec succés');
          }
    }
    public function modifier($numapp)
    {  
            $clm = new \App\Models\AppartementModel();

            $Appartement = $clm->find($numapp);
            $data =
            [
                'title'=>'appartement',
                'appartement'=>$Appartement
            ];
        return view("modif_appartement",$data);
    }
    public function sup($numapp){
        $appartementModel = new \App\Models\AppartementModel();
        $appartementModel->delete($numapp);
        return redirect()->to('/liste_appartement')->with('success','suppression avec succés');
    }
}