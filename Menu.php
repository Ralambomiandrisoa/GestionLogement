<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
	{

        $clientModel = new \App\Models\ClientModel();
		$clientInfo = count($clientModel->findAll());
     
        $agenceInfo = new \App\Models\AgenceModel();
        $agenceInfo =count($agenceInfo->findAll());

        $appartementModel= new \App\Models\AppartementModel();
        $appartementInfo = count($appartementModel->findAll());

        $venteModel= new \App\Models\VenteModel();
        $venteInfo = count($venteModel->findAll());



        

		$data =
		[
			'title'=>'Tableau de bord',
			'clientInfo'=>$clientInfo,
			'agenceInfo'=>$agenceInfo,
            'appartementInfo'=>$appartementInfo,
            'venteInfo'=>$venteInfo,

		];
	     return view('menu', $data);
	}


}
