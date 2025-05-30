<?php
define ('ENV', 'dev');
// define ('ENV', 'local');

// Connexion à la base de données MySQL
// http://localhost/phpmyadmin/index.php?route=/sql&db=arroso'moi
include ('database.php');

// Si on est sur le serveur local (xampp)
if (ENV == "local") {
    define ("css_dir", "http://projetafec.local/dist/css/");
    define ("js_dir", "http://projetafec.local/dist/js/");
    define ("images_dir", "http://projetafec.local/images/");

// Si on est sur afecdax.ovh
} else {
    define ("css_dir", "https://angelique.afecdax.ovh/dist/css/");
    define ("js_dir", "https://angelique.afecdax.ovh/dist/js/");
    define ("images_dir", "https://angelique.afecdax.ovh/images/");
}


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