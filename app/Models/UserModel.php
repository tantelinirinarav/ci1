<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table='users';
    protected $primaryKey='id';
    protected $returnType='array';
    protected $allowedFields=['nom' , 'email' ,'password'];
    protected $useTimestamps=false;
    protected $createdField='created_at';
    protected $updatedField='update_at';
    protected $delete_field='delete_at';

    protected $validationRules=[];
    protected $validationMessage=[];
    protected $skipValidation=False;
}

?>