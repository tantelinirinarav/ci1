<?php 

namespace App\controllers;
use App\Models\ModelMatiere;
use App\Models\modelTest;

class ControllerMatiere extends BaseController {

    public function affichageMatiere()
    {
        $model=new ModelMatiere();
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA DANS LA CLASSE MATIERE 
        $data=$model->findAll();


        if($this->request->getMethod() == "post"){
            $data=$this->request->getVar();
            $form_data=[
                'code' =>$data['codes'] 
                 , 'nom_matiere'=>$data['nomsMatieres'] 
                  ,'nom_prof'=>$data['profs'] 
                   ,'coef'=>$data['coeficients'] 
                   ,'niveauMat'=>$data['niveau'] 
            ];
            if($model->insert($form_data)){
               return redirect()->to(base_url('aesMatiere'))->with('status','ajout');
            }
            else{
                echo '<h1>echec ajout fu matiere</h1>';
            }
           
            
        }
      
        return view("site/aesMatiere",[
            'elv'=> $data,
        ]);
    }


    public function deleteMatiere($idMat)
    {
        $models=new ModelMatiere();
        $models->delete($idMat);
        return redirect()->to(base_url('aesMatiere'))->with('status','delete');
    }



    public function editMatiere($idMat)
    {
       $models=new ModelMatiere();
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
       $data=$models->find($idMat);
       echo view('site/editMatiere',[
           'edit'=>$data
       ]);
    }

    public function editMat($idMat)
    {
        $models=new ModelMatiere();

        $datas=[
            'code'=>$this->request->getPost('codes'),
            'nom_matiere'=>$this->request->getPost('nomsMatieres'),
            'nom_prof'=>$this->request->getPost('coeficients'),
            'coef'=>$this->request->getPost('profs'),
            'niveauMat'=>$this->request->getPost('niveau'),
       ];
       $models->update($idMat ,$datas);

       return redirect()->to(base_url('aesMatiere'))->with('status','edit');
    }


    public function licence1()
    {
        $models=new ModelMatiere();
        $models->select("idMat,code,nom_matiere,nom_prof,coef,niveauMat");
        $models->where([
            'niveauMat'=>'L1'
        ]);
        
        $data=$models->findAll();

        return view("site/listeL1AesMat",[
            'elv'=> $data
        ]);


    }
    public function licence2()
    {
        $models=new ModelMatiere();
        $models->select("idMat,code,nom_matiere,nom_prof,coef,niveauMat");
        $models->where([
            'niveauMat'=>'L2'
        ]);
        
        $data=$models->findAll();

        return view("site/listeL2AesMat",[
            'elv'=> $data
        ]);


    }
    public function licence3()
    {
        $models=new ModelMatiere();
        $models->select("idMat,code,nom_matiere,nom_prof,coef,niveauMat");
        $models->where([
            'niveauMat'=>'L3'
        ]);
        
        $data=$models->findAll();

        return view("site/listeL3AesMat",[
            'elv'=> $data
        ]);


    }
    public function M1()
    {
        $models=new ModelMatiere();
        $models->select("idMat,code,nom_matiere,nom_prof,coef,niveauMat");
        $models->where([
            'niveauMat'=>'M1'
        ]);
        
        $data=$models->findAll();

        return view("site/listeM1AesMat",[
            'elv'=> $data
        ]);


    }
    public function M2()
    {
        $models=new ModelMatiere();
        $models->select("idMat,code,nom_matiere,nom_prof,coef,niveauMat");
        $models->where([
            'niveauMat'=>'M2'
        ]);
        
        $data=$models->findAll();

        return view("site/listeM2AesMat",[
            'elv'=> $data
        ]);


    }

}