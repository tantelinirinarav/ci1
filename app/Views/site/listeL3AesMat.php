<?= $this->include("include/header");?>

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



<div style="background-image: url(<?= site_url()?>/assets/img/tantelinirina.png);   padding-top: 8%;
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
								
								<a href="listem"  
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
										<a href="liste2m" style="text-decoration:none; color:white; ">Licence 2</a>
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
							<a href=""  style="text-decoration:none; color:white; ">Licence 3</a>
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
							<a href="liste4m"  style="text-decoration:none; color:white; ">Master 1</a>
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
							<a href="liste5m"  style="text-decoration:none; color:white; ">Master 2</a>
						</div>


				</div>
				
			</div>

				<div class="col-md-9 pr-5" >
					<form action="">
					<table class="table table-striped " Style="text-align: center; ">
						<tr class="text-secondary bg-light">
							<th >CODE</th><th>NOM_MATIERE </th><th>PROF</th><th>COEFFICIENT</th><th>NIVEAU</th><th>ACTIONS</th>
								
									
								<?php
									
										if(count($elv) > 0){
											foreach($elv as $index=>$u){
								?>		
											<tr class="list-group-item-action " style="color:black; ">				
											<tr class="list-group-item-action " style="color:black; ">				
												<td><?php echo $u['code'] ?></td>
												<td><?php echo $u['nom_matiere'] ?></td>
												<td><?php echo $u['nom_prof'] ?></td>
												<td><?php echo $u['coef'] ?> </td>
												<td><?php echo $u['niveauMat'] ?> </td>
												<td>
													
													
												<a href="<?php echo site_url('site/edit/'.$u['idMat']) ?>"    style="border: none; background-color: cadetblue; border-radius:8px; text-decoration:none; color:white;" > <img alt="" src="<?= site_url()?>/assets/img/manova_16.png"> Edit</a>

												<a href="<?= base_url('site/deleteMatiere/'.$u['idMat']) ?>" style="border: none; background-color: cadetblue; border-radius:8px; text-decoration:none; color:white;" > <img alt="" src="<?= site_url()?>/assets/img/mamafa_16.png"> Delete</a>

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
						
						<a href="#modal" class="js-modal text-light "  style="text-decoration:none;" > <img alt="" src="<?= site_url()?>/assets/img/ajout.ico"> Nouveu</a>
			
			</div>
		

			<aside id="modal" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display: none;">
				<div class="modal-wrapper js-modal-stop">
					<div>
						<button class="js-modal-close bg-light " style="float: right; border: none; border-radius: 10px; ">  <img alt="" src="public/img/ferme_16.png">	</button>
					</div>
					<h1 id="titlemodal" style="text-align: center;">Nouveau Matière:) </h1>
					
					<hr> 
						<form action="<?php echo base_url('aesMatiere') ?>" method="post">
						
							<div>
								<label for="code">Code</label>
								<input type="text" placeholder="Code Matiere" class="form-control" id="code" name="codes" required="required">
								<label for="noms">Nom du matiere</label>
								<input type="text" placeholder="Nom matiere" class="form-control" id="noms" name="nomsMatieres" required="required">
								<label for="prof">Prof</label>
								<input type="text" placeholder="Prof matiere" class="form-control" id="prof" name="profs" required="required">
								<label for="coef">Coef</label>
								<input type="number" placeholder="coefficient" class="form-control" id="coef" name="coeficients" required="required">
								<label for="p">Niveau</label>
								<!-- <input type="number" placeholder="Matricule" class="form-control" id="p" name="image" required="required"> -->
								<select  id="p" name="niveau" placeholder="Parcours" class="form-control" required="required">
									<option value="L1" name="niveau">L1</option>
									<option value="L2" name="niveau">L2</option>
									<option value="L3" name="niveau">L3</option>
									<option value="M1" name="niveau">L3</option>
									<option value="M2" name="niveau">L3</option>
								</select>
								<hr> 
								<div>
									<button type="submit" class="js-modal-close btn btn-success" style="margin-left:240px; margin-top: 10px; text-align: center;">Ajouter</button>
								</div>
							</div> 
							
						</form>
						
					
				
					<hr>
				</div>
									
			</aside>


			
			<script src="<?= site_url()?>/assets/js/apk.js"></script>

	
		</div>
	</div>
	
</div>  
<?= $this->include("include/footer");?>