<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelExamen extends Model
{

    protected $table='examen';
    protected $primaryKey='idEx';
    protected $returnType='array';
    protected $allowedFields=['type' , 'anne_universitaire' ,'lieu' ,'matricule','niveau','code','note'];
    protected $useTimestamps=false;
    protected $createdField='created_at';
    protected $updatedField='update_at';
    protected $delete_field='delete_at';

    protected $validationRules=[];
    protected $validationMessage=[];
    protected $skipValidation=False;

 
}

?>