<?php 

namespace App\controllers;
use App\Models\UserModel;

class ControllerUser extends BaseController {

    public function ajoutUser()
    {
        $model=new UserModel();
        //RECUPERATION DE DONNEES DANS LE VARIABLE DATA
         $data=$model->findAll();

         if($this->request->getMethod() =="post"){
             $data=$this->request->getVar();
             $form_data=[

                 'nom' =>$data['noms'] 
                  , 'email'=>$data['emails'] 
                   ,'password'=>$data['psws'] 
                   
             ];

            if($model->insert($form_data)){
                return redirect()->to(base_url('login'))->with('status','ajoutUser');
             }
           
            
         }
         return view("site/login");
    }

    public function inscrire()
    {
        $model=new UserModel();
        $donne=$model->findAll();

        if($this->request->getMethod() =="post"){
            $data=$this->request->getVar();

            $session=session();

            for($i=0 ; $i <= 10; $i++){
                $nu=$donne[$i]['nom'];  
                $em=$donne[$i]['email'];
                $ps=$donne[$i]['password'];
                if($nu == $data['noms'] && $em == $data['emails'] && $ps == $data['psws'])
                {
                    return redirect()->to(base_url('accueil' ))->with('status','ajoutUser');
                }  
            }

            $session->setFlashdata("error", "Utilisateur incorrect");
            return redirect()->to(base_url('login'))->with('status','ajoutUser');

        }
    
    }

}    