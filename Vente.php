<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Vente extends BaseController
{
    public function index()
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

 
        return view("vente", $data);
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

}