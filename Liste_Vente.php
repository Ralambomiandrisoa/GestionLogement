<?php

namespace App\Controllers;
use App\Models\VenteModel;
use App\Controllers\BaseController;

class Liste_Vente extends BaseController
{
    
    public function __construct()
    {
       helper(['url','form']) ;
    }
    public function index()
    {
        $clientModel = new \App\Models\VenteModel();

        $data=['liste'=>$clientModel->findAll()] ; 

        return view("liste_vente", $data);
    }
    public function form()
    {
        $session = session();
        $roleModel = new \App\Models\ClientModel();
        $role_name = session()->get('numcli');
        $clientInfo =$roleModel->find($role_name);

        $cite = new \App\Models\AgenceModel();
        $rolecite = session()->get('numag');
        $agenceInfo =$cite->find($rolecite);

        $terrain = new \App\Models\AppartementModel();
        $roleterrain = session()->get('numapp');
        $appartementInfo =$terrain->find($roleterrain);

     

        $data = [
            'ClientInfo'=>$clientInfo,
           'AgenceInfo'=> $agenceInfo,
           'AppartementInfo'=> $appartementInfo,
          

        ];

        if ($session->getFlashdata("logement")) {
            $data["message"] = $session->getFlashdata("message");
        }
           
        

        return view("vente", $data);
    }
    public function action(){
      
        $validation = $this->validate(
         [
             
             'nomcli' =>[
                 'rules'=>'required',
                 'errors'=>[
                    'required'=>'le nom du client'
                 ]          
                   ] ,
                   
            
           
                 'nomag' => [
                     'rules'=>'required',
                     'errors'=>[
 
                        'required'=>'le nom du agence'
                     ]
                 ],
             'nomapp' => [
                 'rules'=>'required',
                 'errors'=>[
                     'required'=> 'Nom appartement',
                     ]
                    ],
                    'date' => [
                        'rules'=>'required',
                        'errors'=>[
                            'required'=> 'La date',
                            ]
                           ],
                'prix' => [
                    'rules'=>'required',
                    'errors'=>[
                        'required'=> 'Prix maison',
                 ]
             ]
             ]
         ); 
 
         $session = session();
         $roleModel = new \App\Models\ClientModel();
         $role_name = session()->get('numcli');
         $clientInfo =$roleModel->find($role_name);
 
         $cite = new \App\Models\AgenceModel();
         $rolecite = session()->get('numag');
         $agenceInfo =$cite->find($rolecite);
 
         $terrain = new \App\Models\AppartementModel();
         $roleterrain = session()->get('numapp');
         $appartementInfo =$terrain->find($roleterrain);
 
      
 
         $data = [
             'ClientInfo'=>$clientInfo,
            'AgenceInfo'=> $agenceInfo,
            'AppartementInfo'=> $appartementInfo,
           
 
         ];
 
         
 
 
         if(!$validation){
             return view('vente',$data);
         }
         else{
              $nomcli = $this->request->getPost('nomcli');
            
             $nomag = $this->request->getPost('nomag');
           
             $nomapp = $this->request->getPost('nomapp');

             $date = $this->request->getPost('date');

             $prix = $this->request->getPost('prix');
            
             $values=[
                 'nomcli'=>$nomcli,
                
                 'nomag'=>$nomag,
                
                 'nomapp'=>$nomapp,

                 'date'=>$date,

                 'prix'=>$prix,
                     ];
                     
                     $venteModel = new \App\Models\VenteModel();
                   $query = $venteModel->insert($values);
               
                   
 
                   if(!$query){
                     $session = session();
                     $session->setFlashdata('fail', 'enregistrement echoué');
                     return view('/vente',$data);
                   }
                   else{
                     $session = session();
                     $session->setFlashdata('success', 'enregistré avec succés');
               return view('/vente',$data);
                   }
         }
        
     }
    public function save()
    {
       $validation = $this->validate( 
        [
            'nomcli' =>[
                'rules'=>'required',
                'errors'=>[
                   'required'=>'le nom du client'
                ]          
                  ] ,
                  
           
          
                'nomag' => [
                    'rules'=>'required',
                    'errors'=>[

                       'required'=>'le nom du agence'
                    ]
                ],
            'nomapp' => [
                'rules'=>'required',
                'errors'=>[
                    'required'=> 'Nom appartement',
                    ]
                   ],
                   'date' => [
                       'rules'=>'required',
                       'errors'=>[
                           'required'=> 'La date',
                           ]
                          ],
               'prix' => [
                   'rules'=>'required',
                   'errors'=>[
                       'required'=> 'Prix maison',
                ]
            ]
            ]
        ); 

        $session = session();
        $roleModel = new \App\Models\ClientModel();
        $role_name = session()->get('numcli');
        $clientInfo =$roleModel->find($role_name);

        $cite = new \App\Models\AgenceModel();
        $rolecite = session()->get('numag');
        $agenceInfo =$cite->find($rolecite);

        $terrain = new \App\Models\AppartementModel();
        $roleterrain = session()->get('numapp');
        $appartementInfo =$terrain->find($roleterrain);

     

        $data = [
            'ClientInfo'=>$clientInfo,
           'AgenceInfo'=> $agenceInfo,
           'AppartementInfo'=> $appartementInfo,
          

        ];

        


        if(!$validation){
            return view('vente',$data);
        }
        else{
             $nomcli = $this->request->getPost('nomcli');
           
            $nomag = $this->request->getPost('nomag');
          
            $nomapp = $this->request->getPost('nomapp');

            $date = $this->request->getPost('date');

            $prix = $this->request->getPost('prix');
           
            $values=[
                'nomcli'=>$nomcli,
               
                'nomag'=>$nomag,
               
                'nomapp'=>$nomapp,

                'date'=>$date,

                'prix'=>$prix,
                    ];
                    
                    $venteModel = new \App\Models\VenteModel();
                  $query = $venteModel->insert($values);
              
                  

                  if(!$query){
                    $session = session();
                    $session->setFlashdata('fail', 'enregistrement echoué');
                    return view('/vente',$data);
                  }
                  else{
                    $session = session();
                    $session->setFlashdata('success', 'enregistré avec succés');
              return view('/vente',$data);
                  }
        }
        
    }
    public function edit($numvente){
        $venteModel = new \App\Models\VenteModel();
        $data = [
            "nomcli" =>$this->request->getPost(["nomcli"]),
            'nomag'=>$this->request->getPost(["nomag"]),         
            'nomapp'=>$this->request->getPost(["nomapp"]),
            'date'=>$this->request->getPost(["date"]),
            'prix'=>$this->request->getPost(["prix"]),
            
        ];
        $venteModel->update($numvente, $data);
        if(!$venteModel){
            return redirect()->back()->with('fail',' echec de mise à jour');
          }
          else{
           
            return redirect()->to('liste_vente')->with('success','mise à jour efféctué avec succés');
          }
    }
    public function modifier($numvente)
    {  
            $clm = new \App\Models\VenteModel();

            $Vente = $clm->find($numvente);
            $data =
            [
                'title'=>'vente',
                'vente'=>$Vente
            ];
        return view("modif_vente",$data);
    }
    public function sup($numvente){
        $venteModel = new \App\Models\VenteModel();
        $venteModel->delete($numvente);
        return redirect()->to('/liste_vente')->with('success','suppression avec succés');
    }
}