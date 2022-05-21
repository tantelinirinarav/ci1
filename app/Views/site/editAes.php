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

				<div class="col-md-6 p-3 bg-light" >
                    <form action="<?php echo site_url('aes/edit/'.$edit['matricule']) ?>" method="post">
                    <div>
						<button class="js-modal-close bg-light " style="float: right; border: none; border-radius: 10px; ">  <img alt="" src="<?= site_url()?>/assets/img/ferme_16.png">	</button>
					</div>
                            <h3 style="text-align:center;">Modification d'etudiant:)</h3>
                            <hr>
                            <div>
                                <label for="p">Parcours</label>
                                <!-- <input type="number" placeholder="Matricule" class="form-control" id="p" name="image" required="required"> -->
                                <select  id="p" name="image" placeholder="Parcours" class="form-control" required="required">
                                    <option value="<?= $edit['image'] ?>" name="image">AES</option>
                                </select>
                                <label for="nom">Nom</label>
                                <input type="text" placeholder="Saisissez votre nom" value="<?= $edit['nom'] ?>" class="form-control" id="nom" name="noms" required="required">
                                <label for="prenom">Prénoms</label>
                                <input type="text" placeholder="Saisissez votre prénoms" value="<?= $edit['prenom'] ?>" class="form-control" id="prenom" name="prenoms" required="required">
                                <label for="niveau">Niveau</label>
                                <!-- <input type="text" placeholder="Niveau" class="form-control" id="niveau" name="niveaus" required="required"> -->
                                <select  id="niveau" name="niveaus" placeholder="Niveau" class="form-control" required="required">
                                    <option value="<?= $edit['niveau'] ?>" name="niveaus">L1</option>
                                </select>
                                <hr> 
                                <div>
                                    <button type="submit" class="btn btn-primary" style="margin-left:280px; text-align: center;">Modifier</button>
                                </div>
                            </div> 
                            
                        </form>
					
					<br>
			</div>
            <div class="col-md-3"></div>    

	</div>
	
</div>  

<?= $this->include("include/footer");?>


