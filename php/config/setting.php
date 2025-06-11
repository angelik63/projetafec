<?php
// Lire le fichier .env
function loadEnv($path)
{
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
} 
loadEnv(__DIR__. '/../.env');
// On récupère l'environnement (local par défaut si non défini)
$env = getenv('APP_ENV') ?: 'local';



// Si on est sur le serveur local (xampp)
if ($env === "local") {
    define ("css_dir", "http://projetafec.local/dist/css/");
    define ("js_dir", "http://projetafec.local/dist/js/");
    define ("images_dir", "http://projetafec.local/images/");

    $host = 'localhost';
    $dbname = "plantes";
    $user = 'root';
    $password = '';

// Si on est sur afecdax.ovh
} elseif ($env === "prod") {
    define ("css_dir", "https://angelique.afecdax.ovh/dist/css/");
    define ("js_dir", "https://angelique.afecdax.ovh/dist/js/");
    define ("images_dir", "https://angelique.afecdax.ovh/images/");
    
    $host = 'blobidesafec.mysql.db';
    $dbname = "blobidesafec";
    $user = 'blobidesafec';
    $password = 'Afec2025Dax';
    // https://phpmyadmin.hosting.ovh.net/index.php?pma_username=blobidesafec&pma_servername=blobidesafec.mysql.db
}

// Connexion à la base de données MySQL
/* // http://localhost/phpmyadmin/index.php?route=/sql&db=arroso'moi */
include ('database.php');

$menu = array(
    array(
        'title' => "Accueil",
        'pagename' => 'accueil',
        'url' => 'index.php'
    ),
    array(
        'title' => "Herbier",
        'pagename' => 'herbier',
        'url' => 'herbier.php'
    ),
    array(
        'title' => "Repertoire",
        'pagename' => 'repertoire',
        'url' => 'repertoire.php'
    ),
    array(
        'title' => "Conseils",
        'pagename' => 'conseils',
        'url' => 'conseils.php'
    ),
    array(
        'title' => "Forum",
        'pagename' => 'forum',
        'url' => 'forum.php'
    ),
    array(
        'title' => "Musique des plantes",
        'pagename' => 'musiqueDesPlantes',
        'url' => 'musiqueDesPlantes.php'
    ),
    array(
        'title' => "Soins des plantes",
        'pagename' => 'soinsDesPlantes',
        'url' => 'soinDesPlantes.php'
    ),
    array(
        'title' => "Se connecter",
        'pagename' => 'connexion',
        'url' => 'connexion.php'
    )  
);