<?php 

namespace App\controllers;
use App\Models\ModelNote;

use App\Models\modelTest;
use App\Models\ModelExamen;

class ControllerNote extends BaseController {

    public function afficheNote()
    {
        return view('site/note');  
    }


    public function aesNote()
    {
        $model=new ModelExamen();
        $data=$model->findAll();

        $models=new modelTest();
        $data2=$models->findAll();

        // //INSERTION DES NOTES DES ETUDIANTS
        // if($this->request->getMethod() =="post"){
            
        //     $data=$this->request->getVar();
        //     $form_data=[
        //         'date_sortie' =>$data['dates'] 
        //          , 'anne_universitaire'=>$data['annes'] 
        //           ,'code'=>$data['codes'] 
        //            ,'matricule'=>$data['matricules'] 
        //            ,'nom'=>$data['noms'] 
        //            ,'note'=>$data['notes'] 
        //     ];

        //     if($model->insert($form_data)){
        //        return redirect()->to(base_url('aesNote'))->with('status','ajout');
        //     }
           
            
        // }

        return view('site/aesNote', [
            'elv'=>$data,
            'rechercheMatricule'=>$data2
        ]);
    }


    // public function ajoutNote()
    // {
    //     $model=new ModelNote();
    //     $data=$model->findAll();

    //     //INSERTION DES NOTES DES ETUDIANTS
    //     if($this->request->getMethod() =="post"){

    //         $data=$this->request->getVar();

    //         $form_data=[
    //             'date_sortie' =>$data['dates'] 
    //              ,'anne_universitaire'=>$data['annes'] 
    //               ,'code'=>$data['codes'] 
    //                ,'matricule'=>$data['matricules'] 
    //                ,'nom'=>$data['noms'] 
    //                ,'note'=>$data['notess'] 
    //         ];

    //         if($model->insert($form_data)){
    //            return redirect()->to(base_url('aesNote'))->with('status','ajout');
    //         }
           
            
    //     }

    //     return view('site/aesNote', [
    //         'elv'=>$data
    //     ]);
    // }


    public function deleteNote($id)
    {
        $models=new ModelNote();
        $models->delete($id);
        return redirect()->to(base_url('aesNote'))->with('status','delete');
    }


    public function rechercherNote()
    {
        $models=new modelTest();
        $data2=$models->findAll();

        $models=new ModelExamen();
        $models->select("matricule , type , anne_universitaire , lieu , niveau , code , note ");
        $data=$this->request->getVar();
        $models->where([
            'matricule'=>$data
        ]);
 
        $donne=$models->findAll();
 
        return view("site/aesNoteRecherche",[
            'etu'=> $donne,
            'rechercheMatricule'=> $data2
        ]);
    }

    public function impression($matr)
    {
  
        $model=new modelTest();

        $models=new ModelExamen();
        $models->select("matricule , type , anne_universitaire , lieu , niveau , code , note ");
        $models->where([
            'matricule'=>$matr
        ]);
        $donne=$models->findAll();

        $model->select("nom , prenom, image");
        $model->where([
            'matricule'=>$matr
        ]);
        $data2=$model->findAll();

       
 
        return view("site/print",[
            'etu'=> $donne,
            'elv'=> $data2
        ]);
    }
}    