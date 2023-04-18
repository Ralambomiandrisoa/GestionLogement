<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = "client";
    protected $primaryKey = 'numcli';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["nomcli", "prenomcli", "sexe", "cincli", "adressecli", "telcli"];
    protected $validationRules = [
        "nomcli" => "required",
        "prenomcli" => "required",
        "sexe"=> "required",
        "cincli"=> "required",
        "adressecli"=> "required",
        "telcli"=> "required"

    ];
    
}