<?php

namespace App\Models;

use CodeIgniter\Model;

class AppartementModel extends Model
{
    protected $table = "appartement";
    protected $primaryKey = 'numapp';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["nomapp", "pays", "adresseapp", "nbpiece", "prix"];

    protected $validationRules = [
        "nomapp" => "required",
        "pays" => "required",
        "adresseapp"=> "required",
        "nbpiece"=> "required",
        "prix"=> "required",
    ];
}