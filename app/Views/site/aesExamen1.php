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
								
								<a href=""  
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
										<a href="listeE2" style="text-decoration:none; color:white; ">Licence 2</a>
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
							<a href="listeE3"  style="text-decoration:none; color:white; ">Licence 3</a>
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
							<a href="listeE4"  style="text-decoration:none; color:white; ">Master 1</a>
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
							<a href="listeE5"  style="text-decoration:none; color:white; ">Master 2</a>
						</div>


				</div>
				
			</div>

				<div class="col-md-9 pr-5" >
					<form action="">
					<table class="table table-striped " Style="text-align: center; ">
						<tr class="text-secondary bg-light">
                             <th>MATRICULE</th><th >TYPE</th><th>ANNE UNIV </th><th>LIEU</th><th>NIVEAU</th><th>CODE MAT</th><th>NOTE</th><th>ACTIONS</th>
								
									
								<?php
									
										if(count($elv) > 0){
											foreach($elv as $index=>$u){
								?>		
											<tr class="list-group-item-action " style="color:black; ">				
                                                <td><?php echo $u['matricule'] ?> </td>
												<td><?php echo $u['type'] ?></td>
												<td><?php echo $u['anne_universitaire'] ?></td>
												<td><?php echo $u['lieu'] ?></td>
                                                <td><?php echo $u['niveau'] ?></td>
                                                <td><?php echo $u['code'] ?></td>
                                                <td><?php echo $u['note'] ?></td>
												
												<td>
													
													
												<a href="<?php echo site_url('site/editEx/'.$u['idEx']) ?>"    style="border: none; background-color: cadetblue; border-radius:8px; text-decoration:none; color:white;" > <img alt="" src="public/img/manova_16.png"> Edit</a>

												<a href="<?= base_url('site/deleteExamen/'.$u['idEx']) ?>" style="border: none; background-color: cadetblue; border-radius:8px; text-decoration:none; color:white;" > <img alt="" src="public/img/mamafa_16.png"> Delete</a>

												</td>			
																	
											</tr>
			
								<?php
							
										}
									}
									
								?>
						</tr>
					</table>
					</form>
					<br>
				</div>
				</div>
		
			<div class="text" Style="padding-left:800px; position:fixed;">
						
						<a href="#modal" class="js-modal text-light "  style="text-decoration:none;" > <img alt="" src="public/img/ajout.ico"> Nouveu</a>
			
			</div>
		

			<aside id="modal" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display: none;">
				<div class="modal-wrapper js-modal-stop">
					<div>
						<button class="js-modal-close bg-light " style="float: right; border: none; border-radius: 10px; ">  <img alt="" src="public/img/ferme_16.png">	</button>
					</div>
					<h1 id="titlemodal" style="text-align: center;">inscription:) </h1>
					
					<hr> 
						<form action="<?php echo site_url('aes') ?>" method="post">
						
							<div>
							<label for="p">Parcours</label>
								<!-- <input type="number" placeholder="Matricule" class="form-control" id="p" name="image" required="required"> -->
								<select  id="p" name="image" placeholder="Parcours" class="form-control" required="required">
									<option value="AES" name="image">AES</option>
									<option value="RPM" name="image">RPM</option>
									<option value="DA2I" name="image">DA2I</option>
								</select>
								<label for="nom">Nom</label>
								<input type="text" placeholder="Saisissez votre nom" class="form-control" id="nom" name="noms" required="required">
								<label for="prenom">Prénoms</label>
								<input type="text" placeholder="Saisissez votre prénoms" class="form-control" id="prenom" name="prenoms" required="required">
								<label for="niveau">Niveau</label>
								<select  id="niveau" name="niveaus" placeholder="Niveau" class="form-control" required="required">
									<option value="L1" name="niveaus">L1</option>
									<option value="L2" name="niveaus">L2</option>
									<option value="L3" name="niveaus">L3</option>
									<option value="M1" name="niveaus">M1</option>
									<option value="M2" name="niveaus">M2</option>
								</select>
								
								<hr> 
								<div>
									<button type="submit" class="js-modal-close btn btn-success" style="margin-left:240px; margin-top: 10px; text-align: center;">S'Inscrire</button>
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