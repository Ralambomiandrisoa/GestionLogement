<?php

namespace App\Models;

use CodeIgniter\Model;

class AgenceModel extends Model
{
    protected $table = "agence";
    protected $primaryKey = 'numag';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["nomag","adresseag", "telag"];

    protected $validationRules = [
        "nomag" => "required",
        "adresseag" => "required",
        "telag" => "required",
    ];
    

}
