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
      <h1 class="titre-page">Ajout de votre plante</h1>
      <div class="container">
        <section class="form-ajout-plante">
          <div>
            <div>
              
                <label for="photo" class="drop-container" id="dropcontainer">
                  <span class="drop-title">Déposer vos fichiers</span>
                  ou
                
              <input
                type="file"
                id="photo"
                name="photo"
                />
                </label>
            </div>
            <form>
              <input
                class="input-text"
                type="text"
                name="descriptif"
                placeholder="nom et description de la plante"
              />
              <div class="information">Où se situe la plante.</div>

              <div class="place-plante">
                <label for="interieur">
                  <input
                    type="checkbox"
                    name="interieur"
                    id="interieur"
                  />Intérieur
                </label>
                <label for="exterieur">
                  <input
                    type="checkbox"
                    name="exterieur"
                    id="exterieur"
                  />Extérieur
                </label>
                <label for="potager">
                  <input type="checkbox" name="potager" id="potager" />Potager
                </label>
              </div>
              <div class="info-arrosage">
                <div class="information">Date du dernier arrosage</div>
                <div>
                  <input type="date" name="arrosage" />
                </div>
              </div>
              <div class="info-semis">
                <div class="information">Date du semis</div>
                <div>
                  <input type="date" name="semis" />
                </div>
              </div>
             <div>
            <button type="sumit" class="btn_ajout"><a href="#">Valider</a></button>
          </div>
            </form>
        </div>
    </section>
  </div>
  <?php include ('layout/footer.php'); ?>
            <script defer src="<?php echo js_dir ?>theme.js"></script>
          
    </main>
  </body>
</html>
