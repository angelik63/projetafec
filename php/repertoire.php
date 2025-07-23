<?php 
$pageName = "repertoire";
require_once("config/setting.php");
require_once("functions/strings.php");

// récupère le paramètre
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';

if ($keywords !== '') {
    $sql = "SELECT * FROM fleurs WHERE title LIKE :kw OR description LIKE :kw";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['kw' => '%' . $keywords . '%']);
    $results = $stmt->fetchAll();
} else {
    $results = [];
}
$sql = "SELECT * FROM fleurs ORDER BY id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$repBotanique = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include("layout/headers.php"); ?>
    <title>Arroso'Moi</title>
    <meta name="description" content="Site de conseil et de suivi d'arrosage pour vos plantes" />
  </head>
  <?php include ('layout/modalNotification.php'); ?>
  <body>
<?php include ('layout/header.php'); ?>
    <main>
      <h1><a href="repertoire.php">Répertoire Botanique</a></h1>
        <section>
        
          
         
            <?php if ($repBotanique) { ?>
              <?php foreach ($repBotanique as $fleur) { ?>
                <div id="boxPicture">
                  <div class="box-picture">
                  <div class="box-picture__picture">
                    <img src="<?php echo $fleur['image']; ?>" alt="<?php echo $fleur['title']; ?>"/>
                  </div>
                  <div class="box-picture__name">
                    <h2><?php echo $fleur['title']; ?></h2>
                    <p><?php echo truncate($fleur['description'], 200); ?></p>
                  </div>
                </div>
              </div>
                <?php } ?>
              <?php } ?>
       
     
      </section>


      <!--   <div id="boxPicture">
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus (2)_11zon.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus (2)_11zon.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
        <div class="box-picture">
            <div class="box-picture__picture">
              <img
                src="<?php echo images_dir ?>cactus.webp"
                
              />
            </div>
            <div class="box-picture__name">
              <h3>Cactus</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div> -->
    </main>
<?php include ('layout/footer.php'); ?>
  </body>
</html>
