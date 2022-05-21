<?php

namespace App\Models;
use CodeIgniter\Model;


class ModelNote extends Model
{

    protected $table='notes';
    protected $primaryKey='id';
    protected $returnType='array';
    protected $allowedFields=['date_sortie','anne_universitaire' , 'code' ,'matricule' ,'nom','note'];
    protected $useTimestamps=false;
    protected $createdField='created_at';
    protected $updatedField='update_at';
    protected $delete_field='delete_at';

    protected $validationRules=[];
    protected $validationMessage=[];
    protected $skipValidation=False;
}

?>