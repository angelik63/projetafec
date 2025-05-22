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
          Lorem ipsum dolor sit amet, consectetur adipiscing elit,ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
          cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
          id est laborum.
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
              <button type="sumit" class="btn_ajout">Valider</button>
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
      <footer>
        <div class="box-footer">
          <div class="box-footer-site">
            <div class="box-footer_title">A propos</div>
            <ul>
              <li>Mon herbier</li>
              <li>Répertoire Botanique</li>
              <li>Notification rappel</li>
              <li>Mon compte</li>
              <li>Forum</li>
              <li>Se déconnecter</li>
            </ul>
          </div>
          <div class="box-footer-info">
            <div class="box-footer_title">Informations</div>
            <ul>
              <li>A propos</li>
              <li>Mentions légales</li>
              <li>Politique de confidentialités</li>
              <li>Nous contacter</li>
            </ul>
          </div>
        </div>
        <div class="footer-copyright">
          ©2025 Arroso'Moi - Tous droits réservés
        </div>
      </footer>
    
      <script defer src="dist/js/theme.js"></script>
  </body>
</html>
