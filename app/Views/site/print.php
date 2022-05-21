<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url()?>/assets/css/style.css">
    <title>Impression</title>
</head>

<script type="text/javascript">
			
				 
    function prints(el){
            
            var t=document.body.innerHTML;
            var e=document.getElementById(el).innerHTML;
            document.body.innerHTML=e;
            window.print();
            document.body.innerHTML=t;			
            
        }
        
</script>

<body>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card m-5">
                <form action="" id="impression">
                    <div class="card-header" > 
                       
                        <h5 style="text-align:center;">UNIVERSITE DE FIANARANTSOA</h5>
                        <h5 style="text-align:center;">ECOLE DE MANAGENMENT ET D'INNOVATION TECHNOLGIQUE</h5>

                    </div>
                    <div class="card-body">
                            <?php
									
                                    if(count($elv) > 0){
                                        foreach($elv as $index=>$u){
                            ?>

                            <div>
                                                        
                                 <p> <strong>NOM : </strong>  <span style="padding-left :65px;"> <?php echo $u['nom'] ?></span> </p>
                                 <p> <strong>Prénoms :</strong> <span style="padding-left :40px;"> <?php echo $u['prenom'] ?></span>  </p>
                                 <p> <strong>Parcours :</strong> <span style="padding-left :40px;"> <?php echo $u['image'] ?></span>  </p>

                            </div>       
                            <?php
                                        
                                    }
                                }
                                
                            ?>
                        

                        <table class="table table-striped " Style="text-align: center;  ">
                        <tr class="text-secondary bg-light">
                             <th>MATRICULE</th><th >TYPE</th><th>ANNE UNIV </th><th>LIEU</th><th>NIVEAU</th><th>CODE MAT</th><th>NOTE</th>
								
									
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
					
											</tr>
			
								<?php
							
										}
									}
									
								?>
						</tr>
                       
                               
                        </table>	
                        <br><br><br><br><br><br><br>

                    </div>
                    <div class="card-footer"  >
                        <p style="float:right;">Moyenne générale : 12</p><br><br>
                        <p style="float:right;">Directeur</p><br><br>

                    </div>
                </form>
                <button class="btn btn-primary;" onclick=" prints('impression'); ">
                      <img alt="" src="<?= site_url()?>/assets/img/print_16.png">Imprimer
                </button>
            </div>
        </div>
        <div class="col-md-2"></div>
        <script src="<?= site_url()?>/assets/js/apk.js"></script>                            
        
    </div>
</body>
</html>