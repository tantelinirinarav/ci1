<?php

namespace App\Models;
use CodeIgniter\Model;

class modelTest extends Model
{

    protected $table='etudiant';
    protected $primaryKey='matricule';
    protected $returnType='array';
    protected $allowedFields=['nom' , 'prenom' ,'niveau' ,'image'];
    protected $useTimestamps=false;
    protected $createdField='created_at';
    protected $updatedField='update_at';
    protected $delete_field='delete_at';

    protected $validationRules=[];
    protected $validationMessage=[];
    protected $skipValidation=False;
}

?>