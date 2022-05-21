<?php 

namespace App\controllers;
use App\Models\ModelExamen;
use App\Models\modelTest;
use App\Models\ModelMatiere;

class ControllerExamen extends BaseController {

    public function examen()
    {
        return view('site/examen'); 
        // $model=new ModelExamen();
        // // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
        // $data=$model->findAll();

        // if($this->request->getMethod() =="post"){
        //     $data=$this->request->getVar();
        //     $form_data=[
        //         'type' =>$data['noms'] 
        //          , 'anne_universitaire'=>$data['prenoms'] 
        //           ,'lieu'=>$data['niveaus'] 
        //            ,'matricule'=>$data['image'] 
        //     ];

        //     if($model->insert($form_data)){
        //        return redirect()->to(base_url('aes'))->with('status','ajout');
        //     }
           
            
        // }
        // return view("site/examen",[
        //     'elv'=> $data
        // ]);
    }


    public function aesExamen()
    {
       $model=new ModelExamen();
        //RECUPERATION DE DONNEES DANS LE VARIABLE DATA
         $data=$model->findAll();

         $model1=new modelTest();
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
        $data1=$model1->findAll();

        $model2=new ModelMatiere();
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
        $data2=$model2->findAll();

         if($this->request->getMethod() =="post"){
             $data=$this->request->getVar();
             $form_data=[
                 'type' =>$data['types'] 
                  , 'anne_universitaire'=>$data['annes'] 
                   ,'lieu'=>$data['lieus'] 
                    ,'matricule'=>$data['matricules']
                    ,'niveau'=>$data['niveaus'] 
                    ,'code'=>$data['codes'] 
                    ,'note'=>$data['notes'] 
                   
             ];

            if($model->insert($form_data)){
                return redirect()->to(base_url('aesExamen'))->with('status','ajout');
             }
           
            
         }
         return view("site/aesExamen",[
             'elv'=> $data,
             'matr'=> $data1,
             'cd'=> $data2
        ]);
   }

   


   public function deleteExamen($idEx)
   {
    $models=new ModelExamen();
    $models->delete($idEx);
    return redirect()->to(base_url('aesExamen'))->with('status','delete');
   }


   public function editExamen($idEx)
   {
   $models=new ModelExamen();
   $data=$models->find($idEx);
       echo view('site/editExamen',[
           'edit'=>$data
       ]);
   }


   public function editEx($idEx)
   {
       $models=new ModelExamen();

       $datas=[
           'matricule'=>$this->request->getPost('matricules'),
           'type'=>$this->request->getPost('types'),
           'anne_universitaire'=>$this->request->getPost('annes'),
           'lieu'=>$this->request->getPost('lieus'),
           'niveau'=>$this->request->getPost('niveaus'),
           'code'=>$this->request->getPost('codes'),
           'note'=>$this->request->getPost('notes')
      ];
      $models->update($idEx ,$datas);

      return redirect()->to(base_url('aesExamen'))->with('status','edit');
   }


   public function licence1()
    {
        $models=new ModelExamen();
        $models->select("idEx,matricule,type,anne_universitaire,lieu,niveau,code,note");
        $models->where([
            'niveau'=>'L1'
        ]);
        
        $data=$models->findAll();

        return view("site/aesExamen1",[
            'elv'=> $data
        ]);


    }
    public function licence2()
    {
        $models=new ModelExamen();
        $models->select("idEx,matricule,type,anne_universitaire,lieu,niveau,code,note");
        $models->where([
            'niveau'=>'L2'
        ]);
        
        $data=$models->findAll();

        return view("site/aesExamen2",[
            'elv'=> $data
        ]);


    }
    public function licence3()
    {
        $models=new ModelExamen();
        $models->select("idEx,matricule,type,anne_universitaire,lieu,niveau,code,note");
        $models->where([
            'niveau'=>'L3'
        ]);
        
        $data=$models->findAll();

        return view("site/aesExamen3",[
            'elv'=> $data
        ]);


    }
    public function M1()
    {
        $models=new ModelExamen();
        $models->select("idEx,matricule,type,anne_universitaire,lieu,niveau,code,note");
        $models->where([
            'niveau'=>'M1'
        ]);;
        
        $data=$models->findAll();

        return view("site/aesExamen4",[
            'elv'=> $data
        ]);


    }
    public function M2()
    {
        $models=new ModelExamen();
        $models->select("idEx,matricule,type,anne_universitaire,lieu,niveau,code,note");
        $models->where([
            'niveau'=>'M2'
        ]);
        
        $data=$models->findAll();

        return view("site/aesExamen5",[
            'elv'=> $data
        ]);


    }
   

}