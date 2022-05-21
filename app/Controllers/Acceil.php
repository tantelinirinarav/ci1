<?php 
namespace App\controllers;
use App\Models\modelTest;
class Acceil extends BaseController {


 
    // CREATION DU METHODE INDEX POUR L'AFFICHAGE DE DONNEES A LA BASES DE DONNEES SUR LE SITE
    public function indexFrom()
    {
    
        return view("site/accueil");
        
      
    } 
    

    public function login()
    {
        return view("site/login");
    }
   
    public function ecole()
    {
        return view("site/etudiant");
    }


    public function aesFunction()
    {
 

        $model=new modelTest();
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
        $data=$model->findAll();

        if($this->request->getMethod() =="post"){
            $data=$this->request->getVar();
            $form_data=[
                'nom' =>$data['noms'] 
                 , 'prenom'=>$data['prenoms'] 
                  ,'niveau'=>$data['niveaus'] 
                   ,'image'=>$data['image'] 
            ];

            if($model->insert($form_data)){
               return redirect()->to(base_url('aes'))->with('status','ajout');
            }
           
            
        }
        return view("site/aes",[
            'elv'=> $data
        ]);
    }


    public function rpm()
    {
        return view("site/rpm");
    }
    

    public function da2i()
    {
        return view("site/da2i");
    }

    public function modal()
    {
        return view("site/modal");
    }


    public function route()
    {
        
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
        
        if($this->request->getMethod() =="post"){
            $data=$this->request->getVar();
            $model=new modelTest();
            $form_data=[
                'nom' =>$data['noms'] 
                 , 'prenom'=>$data['prenoms'] 
                  ,'niveau'=>$data['niveaus'] 
                   ,'image'=>$data['images'] 
            ];
            if($model->insert($form_data)){
                return view("site/tesreRouting");
                echo ' <h3>Ajout du donnees au base de donnees</h3>';
                
            }
            else{
                echo '<h1>echec ajout de donnees</h1>';
            }

        }

        $models=new modelTest();
        $datas=$models->findAll();

        return view("site/tesreRouting",[
            'elv'=> $datas
        ]);
       
    }


    public function delete($matricule)
    {
        
        $models=new modelTest();
        $models->delete($matricule);
        return redirect()->to(base_url('aes'))->with('status','ajout');
    }

    public function licence1()
    {
        $models=new modelTest();
        $models->select("matricule,nom,prenom,niveau,image");
        $models->where([
            'niveau'=>'L1'
        ]);
        
        $data=$models->findAll();

        return view("site/listeL1Aes",[
            'elv'=> $data
        ]);


    }
    public function licence2()
    {
        $models=new modelTest();
        $models->select("matricule,nom,prenom,niveau,image");
        $models->where([
            'niveau'=>'L2'
        ]);
        
        $data=$models->findAll();

        return view("site/listeL2Aes",[
            'elv'=> $data
        ]);


    }
    public function licence3()
    {
        $models=new modelTest();
        $models->select("matricule,nom,prenom,niveau,image");
        $models->where([
            'niveau'=>'L3'
        ]);
        
        $data=$models->findAll();

        return view("site/listeL3Aes",[
            'elv'=> $data
        ]);


    }
    public function M1()
    {
        $models=new modelTest();
        $models->select("matricule,nom,prenom,niveau,image");
        $models->where([
            'niveau'=>'M1'
        ]);
        
        $data=$models->findAll();

        return view("site/listeM1Aes",[
            'elv'=> $data
        ]);


    }
    public function M2()
    {
        $models=new modelTest();
        $models->select("matricule,nom,prenom,niveau,image");
        $models->where([
            'niveau'=>'M2'
        ]);
        
        $data=$models->findAll();

        return view("site/listeM2Aes",[
            'elv'=> $data
        ]);


    }


    public function matiere()
    {
        return view('site/matiere');
    }


    public function aesMatiere()
    {
        $model=new modelTest();
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
        $data=$model->findAll();
        return view("site/aesMatiere",[
            'elv'=> $data
        ]);
        
    }


    public function editEtudiant($matricule)
    {
        $model=new modelTest();
        // RECUPERATION DE DONNEES DANS LE VARIABLE DATA
       $data=$model->find($matricule);
       echo view('site/editAes',[
           'edit'=>$data
       ]);
    }


    public function editEtudiantAes($matricule)
    {
       $model=new modelTest();

       $data=[
            'nom'=>$this->request->getPost('noms'),
            'image'=>$this->request->getPost('image'),
            'prenom'=>$this->request->getPost('prenoms'),
            'niveau'=>$this->request->getPost('niveaus'),
       ];
       $model->update($matricule , $data);

       return redirect()->to(base_url('aes'))->with('status','ajout');
    }


    public function rechercher()
    {
       $models=new modelTest();
       $data=$this->request->getVar();
       $models->select("matricule , nom , prenom , niveau , image");
       $models->where([
           'matricule'=>$data
       ]);

       $donne=$models->findAll();

       return view("site/rechercher",[
           'etu'=> $donne
       ]);
    }
  

    

} 
?>