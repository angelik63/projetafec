<?php
require_once("config/setting.php");
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Arroso'Moi</title>
    <link
      rel="icon"
      type="image/webp"
      href="<?php echo images_dir ?>logo plante ArrosoMoi_11zon.webp"
    />
    <meta
      name="description"
      content="Site de conseil et de suivi d'arrosage pour vos plantes"
    />
   
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Angel" />
    <link rel="stylesheet" href="<?php echo css_dir ?>theme.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
   <?php include ('layout/header.php'); ?>
    <main>
      <h1>Herbier</h1>
        <div id="boxPicture">
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>/cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <button class="btn_ajout"><a href="ajoutPlante.php">Ajouter une plante</button></a>
    </main>
<?php include ('layout/footer.php'); ?>
    <script defer src="<?php echo js_dir ?>theme.js"></script>
  </body>
</html>
