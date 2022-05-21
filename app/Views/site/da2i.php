
<?php $this->extend("layout/master");?>
<?php $this->section("body-contents");?>
<body>
	
	    
            <div class="text">
                <h1 class="">Bienvenue au site de Giga Tech Fianarantsoa</h1>
              
               <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellendus itaque nam harum dolor eligendi sit! Sint maxime dolore iste, qui laudantium ea non molestiae officiis earum nobis dolor? Sit eum doloremque voluptates beatae in, est porro nemo, nulla quasi earum tempora cumque quo assumenda. Ad, quae. Non amet nesciunt repellat molestias velit, rerum quidem, incidunt repellendus sed vel optio dicta minima dolorum! Beatae, a voluptas culpa ipsam, ab iusto assumenda quisquam aperiam consectetur quos dolor vero modi eligendi tempore itaque aspernatur exercitationem. Eius numquam pariatur autem ipsum accusantium dignissimos perspiciatis mollitia doloremque! Deserunt voluptatibus illum corrupti dolorem ullam autem maxime nisi similique, voluptatem quo ab ipsum. Consequatur eveniet nobis repellat ipsum magni illo omnis labore repellendus, magnam atque alias totam vero eligendi similique suscipit officiis neque optio cupiditate perspiciatis beatae voluptate amet tempore dolorem! Atque inventore magnam sunt suscipit neque vitae aspernatur ea unde at. Cumque tempora quis vel.
               </p>
                <a href="#modal " class="js-modal btn btn-primary mb-5" > Se Connecter</a>
            </div>
        </div>
    </div>
   

    <aside id="modal" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display: none;">
        <div class="modal-wrapper js-modal-stop">
             <div>
            	<button class="js-modal-close " style="float: right; border: none; ">  <img alt="" src="img/ferme_16.png">	</button>
            </div>
            <h1 id="titlemodal" style="text-align: center;">Authentification </h1>
            
            <hr> 
            	<form action="authentification.do" method="post">
            	
            		<div>
            			<label for="nom">Nom</label>
            			<input type="text" placeholder="Saisissez votre nom" class="form-control" id="nom" name="noms" required="required">
            			<label for="prenom">Prénoms</label>
            			<input type="text" placeholder="Saisissez votre prénoms" class="form-control" id="prenom" name="prenoms" required="required">
            			<label for="E-mail">E-Mail</label>
            			<input type="email" placeholder="Saisissez votre Adresse Mail" class="form-control" id="E-mail" name="mails" required="required">
            			<label for="tel">Téléphone</label>
            			<input type="text" placeholder="034-00-000-00" class="form-control" id="tel" name="tels" pattern="[0]{1}[3]{1}[4]{1}-[0-9]{2}-[0-9]{3}-[0-9]{2}" required="required">
            			<label for="adresse">Adresse</label>
            			<input type="text" placeholder="Saisissez votre Adresse" class="form-control" id="adresse" name="adresses" required="required">
            			 <div>
			            	<button class="js-modal-close btn btn-primary" style="margin-left:240px; margin-top: 10px; text-align: center;">Connecter</button>
			            </div>
            		</div> 
            		
            	</form>
            	
            <hr> 
           
            <hr>
        </div>

    </aside>
    <script src="js/apk.js"></script>
	</body>
	<?php $this->endSection();?>
