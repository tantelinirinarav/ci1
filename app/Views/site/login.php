
<?= $this->include("include/headerLogin");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Ecole</title>
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/index.css">
</head>

<div class="row bg-secondary" style="padding:2%;"> 
    <div class="col-md-4"></div>  

            <div class="col-md-4">



                 <div>
                     <img style="padding-left:128px; " src="<?= site_url()?>/assets/img/log1.png" alt="">
                </div>

                <form action="<?php echo site_url('inscrire') ?>" style="padding:8%; border-top-left-radius:20px; border-bottom-left-radius:20px; margin-top:-50px;" class="bg-light" method="post">
                            <div>
                                <hr>
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="noms" placeholder="Nom Utilisateur" required="required">
                                    <label for="email">E-Mail</label>
                                    <input type="email" class="form-control" name="emails" placeholder="E-Mail Utilisateur" required="required">
                                    <label for="psw">Mot de pass</label>
                                    <input type="password" class="form-control" name="psws" placeholder="Mot de pass Utilisateur" required="required">
                                    <button type="submit" class="btn btn-primary mt-2">Connexion</button>
                            </div>
   
                            <div class="text" >
                                <a href="#modal" class="js-modal text-primary "  >  creer un nouveau compte</a>
                            </div>    


                            <?php

                                if(session()->get("error")){
                            ?> 
                                    <p style="color:red;"> 
                                        <?php echo session()->get("error"); ?>
                                    </p>

                            <?php 
                                }

                            ?>
                </form>
            </div>
    </div>
                    
</div>
            

<div class="col-md-4"></div>
		

			<aside id="modal" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display: none;">
				<div class="modal-wrapper js-modal-stop">
					<div>
						<button class="js-modal-close bg-light " style="float: right; border: none; border-radius: 10px; ">  <img alt="" src="public/img/ferme_16.png">	</button>
					</div>
					<h3 id="titlemodal" style="text-align: center;">Creer nouveau compte:) </h3>
					
					<hr> 
						<form action="<?php echo site_url('login') ?>" method="post">
						
							<div>
								<label for="nom">Nom</label>
								<input type="text" placeholder="Nom Utilisateur" class="form-control" id="nom" name="noms" required="required">
								<label for="mail">E-Mail</label>
								<input type="email" placeholder="E-Mail" class="form-control" id="email" name="emails" required="required">
								<label for="psw">Mot de Pass</label>
								<input type="password" placeholder="Mot de pass" class="form-control" id="psw" name="psws" required="required">
								<hr> 
								<div>
									<button type="submit" class="js-modal-close btn btn-success" style="margin-left:240px; margin-top: 10px; text-align: center;">S'Inscrire</button>
								</div>
							</div> 
							
						</form>
						<br>
					<hr>
				</div>
									
			</aside>

			
			<script src="<?= site_url()?>/assets/js/apk.js"></script>

<?= $this->include("include/footerLogin");?>
