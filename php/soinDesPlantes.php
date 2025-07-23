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
<?php include('layout/modalNotification.php'); ?>

<body>
  <?php include('layout/header.php'); ?>
  <main>
    <section class="site-title">
      <div class="container">
        <h1>Les Biodynamiseurs</h1>
      </div>
      <section class="box-advice">
        <div>
          <h2> Découvrez les outils de l'agriculture biodynamique pour harmoniser votre jardin</h2>
          <p>
            ⚡ Qu'est-ce que la biodynamie ?
            La biodynamie est une approche holistique de l'agriculture qui considère la ferme comme un organisme vivant en interaction avec les forces cosmiques et telluriques. Les biodynamiseurs sont des outils conçus pour capter, harmoniser et diffuser ces énergies subtiles.
          </p>
          <div class='box-repertoire'>
            <div class="boxRepertoire__name">
              <div class="boxRepertoire__picture">
                        <img src=""/>
                      </div>
                    <h3>Géobiologie</h3>
                    <p>Étude des influences du sous-sol sur le vivant, veines d'eau, réseaux telluriques</p>
          <div>Ondes de forme
            Émission d'énergies subtiles par les formes géométriques spécifiques</div>
          <div>Influences cosmiques
            Prise en compte des cycles lunaires et planétaires sur la croissance</div>
          <div>Énergies subtiles
            Utilisation des énergies non mesurables par la science conventionnelle</div>
        </div>
       
      </section>

      <section class="site-title">
        <div class="container">
          <h2>Découvertes du Biodynamiseur Botanique de Gaujacq</h2>
        </div>
        <section class="box-advice">
          <div>
            <h2> Le BBG</h2>
            <p>
              Le Biodynamiseur Botanique de Gaujacq est un appareil de soins aux
              culture.
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
            allowfullscreen></iframe>
        </div>

        <div class="savoir-plus">

          <p>Pour en savoir plus</p>
          <div class="lien-savoir-plus"><a href="https://www.biodynamiseurbotanique.fr/">www.biodynamiseurbotanique.fr</a></div>
          <div>Spirale de Cuivre Simple
            15-25€
            Spirale basique en cuivre pur pour harmoniser l'énergie tellurique

            Bienfaits :
            Améliore la structure du sol
            Favorise l'enracinement</div>

          <div>Antenne de Lecher
            80-120€
            Outil de détection des énergies subtiles pour optimiser l'emplacement

            Bienfaits :
            Détecte les veines d'eau
            Localise les nœuds géobiologiques</div>
          <div>Dynamiseur Vortex
            200-400€
            Appareil pour dynamiser l'eau d'arrosage selon les principes de Viktor Schauberger

            Bienfaits :
            Restructure l'eau
            Améliore l'absorption nutritive</div>
          <div>Pyramide Énergétique
            50-100€
            Pyramide aux proportions de Khéops pour concentrer l'énergie cosmique

            Bienfaits :
            Concentre l'énergie cosmique
            Accélère la germination</div>
          <div>Oscillateur à Ondes de Forme
            30-60€
            Émetteur d'ondes de forme pour harmoniser l'environnement

            Bienfaits :
            Harmonise les énergies
            Réduit le stress des plantes</div>
          <div>Électrode Tellurique
            40-80€
            Électrode pour capter et diffuser les énergies telluriques

            Bienfaits :
            Capte l'énergie tellurique
            Revitalise les sols fatigués</div>
        </div>
        <section class="box-advice">
          <div>
            <h2> Fabriquer ses propres biodynamiseurs</h2>
            <p>
              Spirale de cuivre simple
              Matériel : Fil de cuivre pur 2mm, pince

              Étapes :

              Couper 1 mètre de fil de cuivre
              Former une spirale de 10cm de diamètre
              Laisser 20cm de fil droit pour l'enfouissement
              Enterrer à 30cm près des racines
              Antenne énergétique
              Matériel : Tige de cuivre, cristal de quartz

              Étapes :

              Fixer le cristal au sommet de la tige
              Orienter vers le nord magnétique
              Planter au centre du jardin
              Laisser dépasser de 50cm du sol
              Attention : Ces techniques relèvent de l'expérimentation personnelle. Les résultats peuvent varier selon les conditions et les individus.
            </p>
          </div>
        </section>
        <section class="box-advice">
          <div>
            <h2> Perspective scientifique</h2>
            <p>
              Arguments en faveur
              Certaines études montrent des améliorations mesurables
              Témoignages d'agriculteurs sur plusieurs générations
              Effets possibles sur la structure du sol
              Limites et controverses
              Manque de preuves scientifiques reproductibles
              Difficultés de mesure des "énergies subtiles"
              Risque d'effet placebo chez l'utilisateur
              Notre position : GreenThumb présente ces outils à titre informatif. Nous encourageons l'expérimentation personnelle tout en gardant un esprit critique et en privilégiant les pratiques agricoles éprouvées
            </p>
          </div>
        </section>

        </div>
  </main>
  <?php include('layout/footer.php'); ?>
</body>

</html>