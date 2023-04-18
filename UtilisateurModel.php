<?php

namespace App\Models;

use CodeIgniter\Model;

class UtiisateurModel extends Model
{
    protected $table = "utilisateur";
    protected $primaryKey = 'Num_user';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["Nom_user","Mot_passe", "Poste"];

    protected $validationRules = [
        "Nom_user" => "required",
        "Mot_passe" => "required",
        "Poste" => "required",
    ];

}
