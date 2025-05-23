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
      <section class="site-title">
        <div class="container">
          <h1>Découvertes du Biodynamiseur Botanique de Gaujacq</h1>
        </div>
        <section class="box-advice">
          <div>
            <h2> Le BBG</h2>
            <p>
              Le Biodynamiseur Botanique de Gaujacq est un appareil de soins aux
              culture.
            </p>
            <p>
              Le principe fondamental est de remplacer l’action des molécules de
              synthèse par de l’information transmise à la plante par l’eau
              d’irrigation ou en pulvérisation en lieu et place des traitements
              habituels. le BBG permettra aussi bien de soigner en urgence pour
              rattraper une culture problématique que d’anticiper le
              développement des végétaux.
            </p>
          </div>
        </section>
        <div class="video">
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/B71EMbrnK7M?si=pSeRfpoiYUUGa7zn"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
    </div>
 
         <div class="savoir-plus">

          <p>Pour en savoir plus</p>
          <div class="lien-savoir-plus"><a href="https://www.biodynamiseurbotanique.fr/"
            >www.biodynamiseurbotanique.fr</a
          ></div>
          </div>
      </main>
      <?php include ('layout/footer.php'); ?>
        <script defer src="<?php echo js_dir ?>theme.js"></script>
   
   
  </body>
</html>
