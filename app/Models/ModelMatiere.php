<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelMatiere extends Model
{

    protected $table='matiere';
    protected $primaryKey='idMat';
    protected $returnType='array';
    protected $allowedFields=['code' , 'nom_matiere'  ,'coef','nom_prof','niveauMat'];
    protected $useTimestamps=false;
    protected $createdField='created_at';
    protected $updatedField='update_at';
    protected $delete_field='delete_at';

    protected $validationRules=[];
    protected $validationMessage=[];
    protected $skipValidation=False;
}

?>