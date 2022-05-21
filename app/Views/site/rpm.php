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

<?php
$nav='accueil';
?>

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
								
								
									<div style="padding30px; color:white;">
										<a href="licence1Aes" style="text-decoration:none; color:white; "><h4>Licence 1</h4></a>
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
										<a href="licence1Aes" style="text-decoration:none; color:white; "><h4>Licence 2</h4></a>
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
							<a href="licence1Aes" style="text-decoration:none; color:white; "><h4>Licence 3</h4></a>
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
							<a href="licence1Aes" style="text-decoration:none; color:white; "><h4>Master 1</h4></a>
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
							<a href="licence1Aes" style="text-decoration:none; color:white; "><h4>Master 2</h4></a>
						</div>


				</div>
				
			</div>

				<div class="col-md-9 pr-5" >
					<table class="table table-striped " Style="text-align: center; ">
						<tr class="text-secondary bg-light">
							<th >MATRICULE</th><th>NOM </th><th>PRENOMS</th><th>NIVEAU</th><th>IMAGE</th><th>ACTIONS</th>
								
									
								<?php
									
										if(count($elv) > 0){
											foreach($elv as $index=>$u){
								?>		
											<tr class="list-group-item-action " style="color:black; ">				
												<td><?php echo $u['matricule'] ?></td>
												<td><?php echo $u['nom'] ?></td>
												<td><?php echo $u['prenom'] ?></td>
												<td><?php echo $u['niveau'] ?> </td>
												<td><?php echo $u['image'] ?></td>	

												<td><button type="submit" style="border: none; background-color:cadetblue; border-radius:8px; "> <a  href=""   Style=" text-decoration: none; "> <img alt="" src="public/img/manova_16.png"> </a> </button>
													<button type="submit" style="border: none; background-color: cadetblue; border-radius:8px;" > <a href="" Style=" text-decoration: none;"> <img alt="" src="public/img/mamafa_16.png"></a></button> 
												</td>			
																	
											</tr>
			
								<?php
							
										}
									}
								?>
						</tr>
					</table>	
					<br>
				</div>
			
		
			<div class="text" Style="padding-left:800px; position:fixed;">
						
						<a href="#modal " class="js-modal text-light "  style="text-decoration:none;" > <img alt="" src="public/img/ajout.ico"> Nouveu</a>
			
			</div>
		

			<aside id="modal" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display: none;">
				<div class="modal-wrapper js-modal-stop">
					<div>
						<button class="js-modal-close bg-light " style="float: right; border: none; border-radius: 10px; ">  <img alt="" src="public/img/ferme_16.png">	</button>
					</div>
					<h1 id="titlemodal" style="text-align: center;">inscription </h1>
					
					<hr> 
						<form action="<?php echo site_url('aes') ?>" method="post">
						
							<div>
								<label for="nom">Nom</label>
								<input type="text" placeholder="Saisissez votre nom" class="form-control" id="nom" name="noms" required="required">
								<label for="prenom">Prénoms</label>
								<input type="text" placeholder="Saisissez votre prénoms" class="form-control" id="prenom" name="prenoms" required="required">
								<label for="niveau">Niveau</label>
								<input type="text" placeholder="Niveau" class="form-control" id="niveau" name="niveaus" required="required">
								<label for="adresse">Image</label>
								<input type="text" placeholder="Image" class="form-control" id="image" name="image" required="required">
								<hr> 
								<div>
									<button type="submit" class="js-modal-close btn btn-primary" style="margin-left:240px; margin-top: 10px; text-align: center;">S'Inscrire</button>
								</div>
							</div> 
							
						</form>
						
					
				
					<hr>
				</div>

			</aside>
			<script src="public/js/apk.js"></script>

	
		</div>
	</div>
	
</div>  

<?= $this->include("include/footer");?>


