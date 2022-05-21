
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Ecole</title>
    <!-- <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css"> -->
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/style.css">
</head>
<br>
<body>
<nav class="navbar navbar-expand-md fixed-top bg-dark " Style="height: 50px; ">
	  		<p class="text-secondary px-3" style="font-size: 20px; padding-top: 13px; "> <img src="<?= site_url()?>/assets/img/elv_32.png" alt=""></p>
	  		 
	  		<div class="collapse navbar-collapse justify-content-between"  id="nav">
                <ul class="navbar-nav ">
                    
                    <li class="nav-item <?php if($nav == 'accueil'){ echo 'active';} ?>" style="padding-right:10px; padding-left: 460px;">
                            <a href="accueil"  class="text-secondary" style="  text-decoration: none;  text-indent: 20px; padding-right: 20px;"  >Accueil</a>
                    </li>
                    
                    <li class="nav-item <?php if($nav == 'etu'){ echo 'active';} ?> " style="padding-right:10px; padding-left: 10px;">
                            <a href="etudiant"  class="text-secondary" style="  text-decoration: none;  text-indent: 20px; padding-right: 20px;">Etudiant</a>
                    </li>
                    
                    <li class="nav-item <?php if($nav === 'accueil'): ?> active <?php endif ;?>" style="padding-right:10px; padding-left: 10px;">
                            <a href="matiere"  class="text-secondary" style="  text-decoration: none;  text-indent: 20px; padding-right: 20px;"  onclick="confirmer()">Matiere</a>
                    </li> 
                    <li class="nav-item <?php if($nav === 'accueil'): ?> active <?php endif ;?>" style="padding-right:10px; padding-left: 10px;">
                            <a href="examen"  class="text-secondary" style="text-decoration: none; text-indent: 20px; padding-right: 20px;"  >Examen</a>
                    </li> 
                    
                    <li class="nav-item <?php if($nav === 'accueil'): ?> active <?php endif ;?>" style="padding-left: 10px;">
                            <a href="note" class="text-secondary"  style="  text-decoration: none;text-indent: 20px; "  >Notes</a>
                    </li> 
                    <li class="nav-item <?php if($nav === 'accueil'): ?> active <?php endif ;?>" style="padding-left: 45px;">
                            <a href="login" class="text-secondary"  style="  text-decoration: none;text-indent: 20px; "  >Logout</a>
                    </li> 

                </ul>

                

			  <form action="<?php echo site_url('rechercher')?>" method="get" Style="float: right;" class="form-inline">
                                 <div class="input-group">
                                        <input type="number"  placeholder="recherche etudiant" name="matricules" Style="width: 200px;" value="" class="form-control" placeholder="" required="required">
                                        <div class="input-group-append">
                                                <button type="submit" class="btn btn-info" value=" " ><img src="<?= site_url()?>/assets/img/recher_16.png" ></button> 
                                        </div>
                                 </div>  
                   
			  </form>	
			  
			
			</div>

		</nav>

               