<?php

namespace App\Models;

use CodeIgniter\Model;

class VenteModel extends Model
{
    protected $table = "vente";
    protected $primaryKey = 'numvente';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["nomcli", "nomag", "nomapp","date","Prix"];

    protected $validationRules = [
        "nomcli" => "required",
        "nomag" => "required",
        "nomapp"=> "required",
        "date"=> "required",
        "Prix"=> "required",
    ];
    
}