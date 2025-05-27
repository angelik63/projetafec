<?php 
$pageName = "connexion";
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
      <section class="site-title">
        <div class="container">
          <h1>Découvertes de la musique des plantes</h1>
        </div>
        <section class="box-advice">
          <div>
            <h2>La musique des plantes</h2>
            <p>
              Imagine les plantes murmurer des mélodies secrètes, faites
              d'électricité. Des machines magiques transforment ces "chants"
              invisibles en musique. Un rosier au soleil devient une douce
              rêverie sonore, un chêne puissant vibre d'un rythme profond. C'est
              écouter le cœur électrique et la beauté cachée du monde végétal.
            </p>
          </div>
        </section>
        <div class="video"><iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/edlU24dhedE?si=hww-Fvl8MfYA1dMG"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe></div>

        <div class="savoir-plus">

          <p>Pour en savoir plus</p>
          <div class="lien-savoir-plus"><a href="https://www.musiquedesplantes.fr/"
            >www.musiquedesplantes.fr/</a
          ></div>
          </div>
        
      </main>
<?php include ('layout/footer.php'); ?>
    
  </body>
</html>
