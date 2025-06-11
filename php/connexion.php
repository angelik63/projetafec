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
    <div class="container">
      <div class="breadcrumb">
        <ul>
          <li><a href="index.php" title="accueil">Accueil</a></li>
          <li>
            <a href="connexion.php" title="lien vers page de connexion">Connexion</a>
          </li>
        </ul>
      </div>

      <section>
        <div class="intro-connect">
         Bienvenue, jeune pousse !

Prépare-toi, car ici, on ne va pas te laisser faner dans ton coin. Fini les drames dignes de séries télévisées pour une feuille jaunie ! Tu es sur le point de découvrir le seul site où tes plantes t'enverront des ondes positives (et non des appels au secours en morse). Accroche-toi, ça va bourgeonner sec !

Merci de nous rejoindre dans cette folle aventure où l'on démystifie le monde végétal, une blague à la fois. Prêt à devenir le maître jardinier que tes plantes méritent (et que tes voisins envieront secrètement) ? C'est parti !
        </div>
      </section>
      <div class="container">
        <section class="box-connexion">
          <div>
            <h2>Connexion</h2>
            <p>
              Ah, vous revoilà ! Votre présence nous met la chlorophylle en joie !
            </p>
            <div>
              <input
                class="input-mail"
                type="email"
                id="mail"
                name="user_mail"
                placeholder="email"
                required
              />
            </div>
            <div>
              <input
                class="input-pdw"
                type="password"
                id="password"
                name="password"
                placeholder="mot de passe"
                required
              />
            </div>
            <div>
            <span class="btn">Valider</span>
          </div>
          </div>
        </section>
        <section class="box-inscription">
          <div class="wave-container">
            <a href="inscription.php">
              <h2 class="wave-text">
                <div><span>Pas</span></div>
                <span> encore</span>
                <span> inscrit</span>
              </h2>
            </a>
          </div>
        </section>
      </div>
    </div>
<?php include ('layout/footer.php'); ?>
  </body>
</html>
