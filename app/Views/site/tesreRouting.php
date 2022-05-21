<form action="<?php echo site_url('route') ?>" method="post">
             	
            		<div>
						<label for="nom">Nom</label>
            			<input type="text" placeholder="Saisissez votre nom" class="form-control" id="nom" name="noms" required="required">
            			<label for="prenom">Prénoms</label>
            			<input type="text" placeholder="Saisissez votre prénoms" class="form-control" id="prenom" name="prenoms" required="required">
            			<label for="niveau">Niveau</label>
            			<input type="text" placeholder="Niveau" class="form-control" id="niveau" name="niveaus" required="required">
            			<label for="adresse">Image</label>
            			<input type="text" placeholder="Image" class="form-control" id="image" name="images" required="required">
            			<hr> 
						<div>
			            	<button type="submit" class="js-modal-close btn btn-primary" style="margin-left:240px; margin-top: 10px; text-align: center;">S'Inscrire</button>
			            </div>
            		</div> 
            		
</form>


<table class="table table-striped " Style="text-align: center; ">
				<tr class="text-secondary bg-light">
					<th >MATRICULE</th><th>NOM </th><th>PRENOMS</th><th>NIVEAU</th><th>IMAGE</th><th>ACTIONS</th>
						
							
						<?php
							
								if(count($elv) > 0){
									foreach($elv as $index=>$u){?>		
									<tr class="list-group-item-action " style="color:black; ">				
										<td><?php echo $u['matricule'] ?></td>
										<td><?php echo $u['nom'] ?></td>
										<td><?php echo $u['prenom'] ?></td>
										<td><?php echo $u['niveau'] ?> </td>
										<td><?php echo $u['image'] ?></td>	

										<td><button type="submit" style="border: none; background-color:cadetblue; border-radius:8px; "> <a  href=""   Style=" text-decoration: none; "> <img alt="" src="img/manova_16.png"> </a> </button>
											<button type="submit" style="border: none; background-color: cadetblue; border-radius:8px;" > <a href="" Style=" text-decoration: none;"> <img alt="" src="img/mamafa_16.png"></a></button> 
										</td>			
															
									</tr>
	
						<?php
					
								}
							}
							?>
				</tr>
</table>	