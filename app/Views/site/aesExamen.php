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
								<?php
									
									if(count($elv) > 0){
										foreach($elv as $index=>$u){
								?>		
										<tr class="list-group-item-action " style="color:black; ">				
										<td><?php  $u['matricule'] ?> </td>
												<td><?php  $u['type'] ?></td>
												<td><?php  $u['anne_universitaire'] ?></td>
												<td><?php  $u['lieu'] ?></td>
                                                <td><?php  $u['niveau'] ?></td>
                                                <td><?php  $u['code'] ?></td>
                                                <td><?php  $u['note'] ?></td>
							
										</tr>

										
		
							<?php
						
									}
								}
								
							?>
						
				<div style="text-align: center;

								height: 50px;
								width: 300px;
								background: transparent;
								display: flex;
								align-items: center;
								justify-content: center;
								background-color: rgba(255, 255, 255, .2);
								">
								
								<a href="listeE"  
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

												<?php if($u['note'] < 10 ){?>
													<td style="color:red;"><?php echo $u['note'] ?></td>
												<?php } else{?>
	                                                <td style="color:yellow;"><?php echo $u['note'] ?></td>
												<?php } ?>
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
					<h3 id="titlemodal" style="text-align: center;">Nouveau Examen:) </h3>
					
					<hr> 
						<form action="<?php echo site_url('aesExamen') ?>" method="post">
						
							<div>
								<label for="matricule">Matricule</label>	
								<select  id="matricule" name="matricules" placeholder="Matricule etudiant" class="form-control" required="required">
								<?php
									
									if(count($matr) > 0){
										foreach($matr as $index=>$u){
								?>	
									<option value="<?php echo $u['matricule'] ?>" name="matricules"><?php echo $u['matricule'] ?></option>

									<?php
							
										}
									}
									
								?>	
								</select>
								
								
								<!-- <input type="number" placeholder="Matricule etudiant" class="form-control" id="matricule" name="matricules" required="required"> -->
								<label for="type">Type</label>
								<select  id="type" name="types" placeholder="type examen" class="form-control" required="required">
									<option value="Session Normale" >Session Normale</option>
									<option value="Session Rattrapage" >Session Rattrapage</option>
								</select>
								<!-- <input type="text" placeholder="type examen" class="form-control" id="type" name="types" required="required"> -->
								<label for="anne">Année Universitaire </label>
								<input type="text" placeholder="Année Universitaire" class="form-control" id="anne" name="annes" required="required">
								<label for="lieu">Lieu</label>
								<input type="text" placeholder="Lieu " class="form-control" id="lieu" name="lieus" required="required">
                                <label for="niveau">Niveau</label>
								<!-- <input type="text" placeholder="Niveau " class="form-control" id="niveau" name="niveaus" required="required"> -->
								<select  id="niveau" name="niveaus" placeholder="Niveau" class="form-control" required="required">
									<option value="L1" >L1</option>
									<option value="L2" >L2</option>
									<option value="L3" >L3</option>
									<option value="M1" >M1</option>
									<option value="M2" >M2</option>
								</select>

								<label for="code">Code</label>
								<!-- <input type="text" placeholder="Code Matiere " class="form-control" id="code" name="codes" required="required"> -->
								<select  id="code" name="codes" placeholder="codes" class="form-control" required="required">
								<?php
								if(count($cd) > 0){
										foreach($cd as $index=>$c){
								?>	
									<option value="<?php echo $c['code'] ?>" name="codes"> <?php echo $c['code'] ?> </option>

								<?php
							
										}
									}
									
								?>

								

								


                                <label for="note">Note</label>
								<input type="number" placeholder="Note " class="form-control" id="note" name="notes" required="required">
								

								
								<hr> 
								<div>
									<button type="submit" class="js-modal-close btn btn-success" style="margin-left:240px; margin-top: 10px; text-align: center;">Ajouter</button>
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


