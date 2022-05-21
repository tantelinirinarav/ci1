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



<div style="background-image: url(<?= site_url()?>/assets/img/tantelinirina.png);   padding-top: 3%;
					padding-left: 2%;
					padding-riht: 10%;
					padding-bottom: 10%;
					height: 520px;
					position: relative;
					background-position: center;
					background-repeat: no-repeat;
					background-size: cover;">


	<div class="row">
		<div class="col-md-3"></div>

				<div class="col-md-6 pl-3 pr-3 pt-1 bg-light" >
                    <form action="<?php echo site_url('aes/editMat/'.$edit['idMat']) ?>" method="post">
                    <div>
						<button class="js-modal-close bg-light " style="float: right; border: none; border-radius: 10px; ">  <img alt="" src="<?= site_url()?>/assets/img/ferme_16.png">	</button>
					</div>
                            <h3 style="text-align:center;">Modification Matière:)</h3>
                            <hr>
                            <div>
								<label for="code">Code</label>
								<input type="text" placeholder="Code Matiere" value="<?= $edit['code'] ?>"class="form-control" id="code" name="codes" required="required">

								<label for="noms">Nom du matiere</label>
								<input type="text" placeholder="Nom matiere" value="<?= $edit['nom_matiere'] ?>" class="form-control" id="noms" name="nomsMatieres" required="required">

								<label for="prof">Nom Prof</label>
								<input type="text" placeholder="Prof matiere" value="<?= $edit['nom_prof'] ?>" 
                                class="form-control" id="prof" name="profs" required="required">

								<label for="coef">Coeficient </label>
								<input type="number" placeholder="coefficient" value="<?= $edit['coef'] ?>" class="form-control" id="coef" name="coeficients" required="required">
                                
								<label for="p">Niveau</label>
								<!-- <input type="number" placeholder="Matricule" class="form-control" id="p" name="image" required="required"> -->
								<select  id="p" name="niveau" placeholder="Parcours" class="form-control" required="required">
									<option value="<?= $edit['niveauMat'] ?>" name="niveau">L1</option>
								</select>

								<hr> 
								<div>
									<button type="submit" class="js-modal-close btn btn-primary" style="margin-left:240px; margin-top: 10px; text-align: center;">Modification</button>
								</div>
							</div> 
                            
                        </form>
					
					<br>
			</div>
            <div class="col-md-3"></div>    
            <script src="<?= site_url()?>/assets/js/apk.js"></script>
	</div>
	
</div>  

<?= $this->include("include/footer");?>


