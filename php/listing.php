<?php
require_once("config/setting.php");

// récupère le paramètre
$keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';

if ($keywords !== '') {
    $sql = "SELECT * FROM fleurs WHERE title LIKE :kw";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['kw' => '%' . $keywords . '%']);
    $results = $stmt->fetchAll();
} else {
    $results = [];
}
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
    <div class="fil-ariane">
<ul>
   <li><a href="index.php">Accueil</a></li> 
</ul>
   
    

    <section id="apropos" class="a-propos">
        <h2>Votre recherche pour <?=$keywords;?></h2>
            <?php if ($results): ?>
                <?php foreach ($results as $row): ?>
                    <div style="margin-bottom: 20px;">
                        <h2><?= htmlspecialchars($row['title']) ?></h2>
                        <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                        <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" style="max-width:300px;">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucune randonnée trouvée pour « <?= htmlspecialchars($keywords) ?> ».</p>
            <?php endif; ?>
       
    </section>
    <?php include ('layout/footer.php'); ?>
    <script src="<?php echo js_dir; ?>theme.js?<?=time();?>" defer></script>

</body>

</html>