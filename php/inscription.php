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
          <li><a href="connexion.php" title="lien vers page de connexion">Connexion</a></li>
          <li><a href="inscription.php" title="lien vers page d'inscription">Inscription</a></li>
        </ul>
      </div>
      <section>
        <div class="intro-connect">
          <h1>Rejoignez-nous</h1>
          Vous avez le pouce vert... ou peut-être juste envie de ne plus tuer vos plantes ? Un grand merci de vouloir rejoindre notre joyeuse communauté ! En vous inscrivant, vous aurez accès à des conseils (presque) infaillibles, des rappels pour éviter les drames végétaux. Alors, prêt à devenir un pro du jardinage... Let's go.
        </div>
      </section>
      <div class="container">
        <section class="box-connexion">
          <div>
            <h2>Inscription</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </p>
            <div>
              <ul>
                <li>L'email envoyé est : <?php echo htmlspecialchars($_POST['user_mail'] ?? ''); ?></li>
              </ul>
              <form method="post">
                <div>
                  <input class="input-mail" type="email" id="mail" name="user_mail" placeholder="email" required />
                </div>
                <div>
                  <input class="input-mail" type="email" id="confirm_mail" name="confirm_mail" placeholder="confirmer votre email" required />
                </div>
                <div>
                  <input class="input-pdw" type="password" id="password" name="password" placeholder="mot de passe" required />
                </div>
                <div>
                  <input class="input-pdw" type="password" id="confirm_password" name="confirm_password" placeholder="confirmer votre mot de passe" required />
                </div>
                <div class="condition-obligatoire">
                  <label for="obligatoire">
                    <input type="checkbox" name="obligatoire" required id="obligatoire" />Veuillez cocher cette case pour confirmer que vous avez lu et accepté nos conditions d'utilisation et notre politique de confidentialité.
                  </label>
                </div>
                <div>
                  <button type="submit" class="btn_ajout">Valider</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>
    <?php include ('layout/footer.php'); ?>
  </body>
</html>
