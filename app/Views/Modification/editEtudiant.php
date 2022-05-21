<?= $this->include("include/header");?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Ecole</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/index.css">
</head>



<div style="background-image: url(public/img/tantelinirina.png);   padding-top: 8%;
					padding-left: 2%;
					padding-riht: 10%;
					padding-bottom: 10%;
					height: 520px;
					position: relative;
					background-position: center;
					background-repeat: no-repeat;
					background-size: cover;">


	<div class="row">
		<div class="col-md-3">
							
						
				<div style="text-align: center;

								height: 50px;
								width: 300px;
								background: transparent;
								display: flex;
								align-items: center;
								justify-content: center;
								background-color: rgba(255, 255, 255, .2);
								">
								
								<a href="?>"  
										  style="  border-radius:8px; text-decoration:none; color:white;" >Licence 1 </a>
								
									
				</div>

							<br>


				<div style="text-align: center;

								height: 50px;
								width: 300px;
								background: transparent;
								display: flex;
								align-items: center;
								justify-content: center;
								background-color: rgba(255, 255, 255, .2);
								">
								
								
									<div style="padding30px; color:white;">
										<a href="<?php echo site_url('site/aes/L2') ?>" style="text-decoration:none; color:white; ">Licence 2</a>
									</div>


				</div>

				<br>

				<div style="text-align: center;

					height: 50px;
					width: 300px;
					background: transparent;
					display: flex;
					align-items: center;
					justify-content: center;
					background-color: rgba(255, 255, 255, .2);
					">

							
					
					
						<div style="padding30px; color:white;">
							<a href="<?php echo site_url('site/aes/L3') ?>"  style="text-decoration:none; color:white; ">Licence 3</a>
						</div>


				</div>

				<br>

				<div style="text-align: center;

					height: 50px;
					width: 300px;
					background: transparent;
					display: flex;
					align-items: center;
					justify-content: center;
					background-color: rgba(255, 255, 255, .2);
					">
					
					
						<div style="padding30px; color:white;">
							<a href="<?php echo site_url('site/aes/M1') ?>"  style="text-decoration:none; color:white; ">Master 1</a>
						</div>


				</div>

				<br>

				<div style="text-align: center;

					height: 50px;
					width: 300px;
					background: transparent;
					display: flex;
					align-items: center;
					justify-content: center;
					background-color: rgba(255, 255, 255, .2);
					">
					

				</div>
				
			</div>

						<form action="" method="post">
						
							<div>
								<label for="adresse">Matricule</label>
								<input type="number" placeholder="Image" class="form-control" id="image" name="image" required="required">
								<label for="nom">Nom</label>
								<input type="text" placeholder="Saisissez votre nom" class="form-control" id="nom" name="noms" required="required">
								<label for="prenom">Prénoms</label>
								<input type="text" placeholder="Saisissez votre prénoms" class="form-control" id="prenom" name="prenoms" required="required">
								<label for="niveau">Niveau</label>
								<input type="text" placeholder="Niveau" class="form-control" id="niveau" name="niveaus" required="required">
								
								<hr> 
								<div>
									<button type="submit" style="margin-left:240px; margin-top: 10px; text-align: center;">Modifier</button>
								</div>
							</div> 
							
						</form>
	
		</div>
</div>
	
  

<?= $this->include("include/footer");?>


