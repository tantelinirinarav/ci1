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
                    <form action="<?php echo site_url('aes/editEx/'.$edit['idEx']) ?>" method="post">
					<h3 style="text-align:center;">Modification Examen:)</h3>
							<div>
								<label for="matricule">Matricule</label>	
								<select  id="matricule" name="matricules" placeholder="Matricule etudiant" class="form-control" required="required">
									
									<option value="<?php echo $edit['matricule'] ?>" name="matricules"><?php echo $edit['matricule'] ?></option>
	
								</select>
								
								
								<!-- <input type="number" placeholder="Matricule etudiant" class="form-control" id="matricule" name="matricules" required="required"> -->
								<label for="type">Type</label>
								<select  id="type" name="types" placeholder="type examen" class="form-control" required="required">
									<option value="<?php echo $edit['type'] ?>" >Session Normale</option>
								</select>
								<!-- <input type="text" placeholder="type examen" class="form-control" id="type" name="types" required="required"> -->
								<label for="anne">Année Universitaire </label>
								<input type="text" placeholder="Année Universitaire" value="<?php echo $edit['anne_universitaire'] ?>" class="form-control" id="anne" name="annes" required="required">
								<label for="lieu">Lieu</label>
								<input type="text" placeholder="Lieu " value="<?php echo $edit['lieu'] ?>" class="form-control" id="lieu" name="lieus" required="required">
                                <label for="niveau">Niveau</label>
								<!-- <input type="text" placeholder="Niveau " class="form-control" id="niveau" name="niveaus" required="required"> -->
								<select  id="niveau" name="niveaus" placeholder="Niveau" class="form-control" required="required">
									<option value="<?php echo $edit['niveau'] ?>" ><?php echo $edit['niveau'] ?></option>
								</select>

                                <label for="code">Code/note</label>
								<!-- <input type="text" placeholder="Code Matiere " class="form-control" id="code" name="codes" required="required"> -->
								<select  id="code" name="codes" placeholder="codes" class="form-control" required="required">

									<option value="<?php echo $edit['code'] ?>" name="codes"> <?php echo $edit['code'] ?> </option>

							
                                <label for="note">Note</label>
								<input type="number" placeholder="Note " value="<?php echo $edit['note'] ?>" class="form-control" id="note" name="notes" required="required">
								
								<hr> 
								<div>
									<button type="submit" class="js-modal-close btn btn-primary" style="margin-left:250px;  text-align: center;">Modification</button>
								</div>
							</div> 
							
						</form>
					
					<br>
			</div>
			
            <div class="col-md-3"></div>    
            <script src="<?= site_url()?>/assets/js/apk.js"></script>
	</div>
	
</div>  
<br><br>
<br><br>
<br><br>

<?= $this->include("include/footer");?>


