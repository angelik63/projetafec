<?php
$pageName = "connexion";
require_once("config/setting.php");

var_dump($_POST); // Affiche les informations envoyées depuis le formulaire

// $sql => "INSERT INTO MEMBERS SET PASSWORD=$_POST['password'], NAME=$name";
// $sql=>execute();
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
    <meta name="autor" content="Angel" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="autor" content="Angel" />
   <link rel="stylesheet" href="<?php echo css_dir ?>theme.css?<?=time()?>" />
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
    <div class="container">
      <div class="breadcrumb">
        <ul>
          <li><a href="index.php" title="accueil">Accueil</a></li>
          <li>
            <a href="connexion.php" title="lien vers page de connexion">Connexion</a>
          </li>
        <li>
            <a href="inscription.php" title="lien vers page d'inscription">Inscription</a>
          </li>
        </ul>
      </div>
      <section>
        
        <div class="intro-connect">
          <h1>Rejoignez-nous</h1>
          Vous avez le pouce vert... ou peut-être juste envie de ne plus tuer
          vos plantes ? Un grand merci de vouloir rejoindre notre joyeuse
          communauté ! En vous inscrivant, vous aurez accès à des conseils
          (presque) infaillibles, des rappels pour éviter les drames végétaux.
          Alors, prêt à devenir un pro du jardinage... Let's go.
        </div>
      </section>

      <div class="container">
        <section class="box-connexion">
          <div>
            <h2>Inscription</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore 
            </p>
            <div>
              <ul>
                <li>L'email envoyé est : <?php echo $_POST['user_mail']; ?></li>
                <li>Le mot de passe: <?php echo $_POST['password']; ?></li>
              </ul>

              <form method="post">
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
                class="input-mail"
                type="email"
                id="mail"
                name="user_mail"
                placeholder="confirmer votre email"
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
              <input
                class="input-pdw"
                type="password"
                id="password"
                name="password"
                placeholder="confirmer votre mot de passe"
                required
              />
            <div class="condition-obligatoire">
            <label for="obligatoire">
            <input type="checkbox" name="obligatoire" required id="obligatoire" />Veuillez cocher cette case pour confirmer que vous avez lu et accepté nos conditions d'utilisation et notre politique de confidentialité.
            </label>
            <div>
              <button type="sumit" class="btn_ajout">Valider</button>
            </div>
          </div>
        </form>
        </section>
      </div>
    </div>
<?php include ('layout/footer.php'); ?>
  </body>
</html>
