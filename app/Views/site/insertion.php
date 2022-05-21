
<?php
    echo view("header");
?>
<div>
    <form action="<?php site_url("accueil")?>" method='post'>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" >
        </div>
        
        <div class="form-group">
            <label for="photo">Nom</label>
            <input type="file" id="photo" name="photo">
        </div>
        <button class="btn btn-primary" type="submit">submit</button>
    </form>
</div>
    
</body>
</html>