<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Appartement extends BaseController
{
    public function index()
    {
        return view("appartement");
    }

}
