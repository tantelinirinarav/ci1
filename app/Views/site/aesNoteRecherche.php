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
					<form action="<?php echo site_url('rechercherNote/'.$c['matricule'])?>" method="get" Style="float: right; padding-right:8px;" class="form-inline">
						<div class="input-group">
							<select style="width: 258px;" name="recherches" id="recherche">

								<?php
									if(count($rechercheMatricule) > 0){
												foreach($rechercheMatricule as $index=>$c){
								?>
										<option  value="<?=$c['matricule'] ?>"> <?=  $c['matricule']?> </option>
								<?php
							
										}
									}
								
								?>					
							</select>
							<!-- <input type="number"  placeholder="recherche Matricule" name="matricules" Style="width: 258px;" value="" class="form-control" placeholder="" required="required"> -->
							<div class="input-group-append">
									<button type="submit" class="btn btn-info" value=" " ><img src="<?= site_url()?>/assets/img/recher_16.png" ></button> 
							</div>
						</div>  
                   
					 </form>	
				 <br>
				 <br>
								<?php
									
									if(count($etu) > 0){
										foreach($etu as $index=>$u){
								?>		
										<tr class="list-group-item-action " style="color:black; ">				
											<td><?php  $u['matricule'] ?></td>
											<td><?php  $u['nom'] ?></td>
											<td><?php  $u['prenom'] ?></td>
											<td><?php  $u['niveau'] ?> </td>
											<td><?php  $u['image'] ?></td>	
							
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
							
								
								<a href="<?php echo site_url('site/aes/L1') ?>"  
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
					
					
						<div style="padding30px; color:white;">
							<a href="<?php echo site_url('site/aes/M2') ?>"  style="text-decoration:none; color:white; ">Master 2</a>
						</div>


				</div>
				
			</div>

				<div class="col-md-9 pr-5" >
				<table class="table table-striped " Style="text-align: center; ">
						<tr class="text-secondary bg-light">
                             <th>MATRICULE</th><th >TYPE</th><th>ANNE UNIV </th><th>LIEU</th><th>NIVEAU</th><th>CODE MAT</th><th>NOTE</th><th>ACTIONS</th>
								
									
								<?php
									
										if(count($etu) > 0){
											foreach($etu as $index=>$u){
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
													
													
												<a href="<?php echo site_url('site/editEx/'.$u['idEx']) ?>"    style="border: none; background-color: cadetblue; border-radius:8px; text-decoration:none; color:white;" > <img alt="" src="p<?= site_url()?>/assets/mg/manova_16.png"> Edit</a>

												<a href="<?= base_url('site/deleteExamen/'.$u['idEx']) ?>" style="border: none; background-color: cadetblue; border-radius:8px; text-decoration:none; color:white;" > <img alt="" src="<?= site_url()?>/assets/img/mamafa_16.png"> Delete</a>

												</td>			
																	
											</tr>
			
								<?php
							
										}
									}
									
								?>
						</tr>
					</table>	
				</div>
				</div>

				<div class="text" Style="padding-left:800px; position:fixed;">
			
					<a href="<?= base_url('impression/'.$u['matricule']) ?>"  class="btn btn-primary "  style="text-decoration:none;" > <img alt="" src="<?= site_url()?>/assets/img/print_16.png"> Print</a>
				
				</div>

		
		</div>
	</div>
	
</div>  

<?= $this->include("include/footer");?>


