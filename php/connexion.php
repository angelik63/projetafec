<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Arroso'Moi</title>
    <link
      rel="icon"
      type="image/webp"
      href="/images/logo plante ArrosoMoi_11zon.webp"
    />
    <meta
      name="description"
      content="Site de conseil et de suivi d'arrosage pour vos plantes"
    />
    <meta name="autor" content="Angel" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="autor" content="Angel" />
    <link id="main-css" rel="stylesheet" href="dist/css/theme.css" />
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
    <header>
      <div class="site-header">
        <a
          href="index.html"
          tile="logo du site ramenant sur la page d'accueil"
        ></a>
        <img
          src="images/logo plante ArrosoMoi_11zon.webp"
          id="logo"
          alt="logo plante avec arrosoir"
        />

        <nav class="logo-header" id="menu-icons-js"></nav>

        <nav class="nav" id="menu-js"></nav>
      </div>
    </header>
    <div class="container">
      <div class="breadcrumb">
        <ul>
          <li><a href="index.html" title="accueil">Accueil</a></li>
          <li>
            <a href="connexion.html" title="lien vers page de connexion">Connexion</a>
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
            <button type="sumit" class="btn_ajout"><a href="#">Valider</a></button>
          </div>
          </div>
        </section>
        <section class="box-inscription">
          <div class="wave-container">
            <a href="inscription.html">
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
    
      <script defer src="dist/js/theme.js"></script>
  </body>
</html>
