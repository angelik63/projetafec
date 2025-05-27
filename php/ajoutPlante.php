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
      <h1 class="titre-page">Ajout de votre plante</h1>
      <div class="container">
        <section class="form-ajout-plante">
          <div>
            <div>
              
                <label for="photo" class="drop-container" id="dropcontainer">
                  <span class="drop-title">Déposer vos fichiers</span>
                  ou
                  <span class="btn">Choisir un fichier</span>
              <input
                type="file"
                id="photo"
                name="photo"
                />
                </label>
            </div>
            <form method="post" name="formAjoutPlante" enctype="multipart/form-data">
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
            <span class="btn">Valider</span>
          </div>
            </form>
        </div>
    </section>
  </div>
  <?php include ('layout/footer.php'); ?>
    </main>
  </body>
</html>
