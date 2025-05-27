<?php 
$pageName = "herbier";
require_once("config/setting.php"); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include("layout/headers.php"); ?>
    <title>Arroso'Moi</title>
    <meta name="description" content="Site de conseil et de suivi d'arrosage pour vos plantes" />
  </head>
  <body>
   <?php include ('layout/header.php'); ?>
    <main>
      <h1 id="title-herbier">Herbier</h1>
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
        <span class="btn_ajout">Ajouter une plante<a href="ajoutPlante.php"></a></span>
    </main>
<?php include ('layout/footer.php'); ?>
  </body>
</html>
