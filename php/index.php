<?php 
$pageName = "accueil";
require_once("config/setting.php");
require_once("functions/strings.php");

// Liste des plantes pour "Mon répertoire Botanique"
$sql = "SELECT * FROM fleurs ORDER BY id ASC limit 12";
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
  <body>
  <?php include ('layout/header.php'); ?>
    <main>
      <section class="site-title">
        <div class="container">
          <h1 class="site-title">
            <img src="<?php echo images_dir ?>ArrosoMoi_11zon.webp" />
          </h1>
          <div class="intro">
            <p>
              Vous parlez à vos plantes, et nous vous aidons à les écouter !
              Fatigué d'oublier les arrosages ou les rempotages ? Ce site est
              votre carnet de bord végétal intelligent. Créez votre collection
              virtuelle et recevez des rappels sur mesure pour chaque soin
              essentiel. Cultivez la sérénité et voyez vos trésors verts
              s'épanouir, sans effort !
            </p>
          </div>
        </div>
      </section>

      <section class="box-herbier">
        <div class="mon-herbier">
          <h2><a href="herbier.php">Mon herbier</a></h2>
          <p>
            Quelle joie d'accueillir une nouvelle plante dans votre jardin
            virtuel ! Racontez-nous tout de cette merveille verte qui vient
            enrichir votre précieuse collection. Ensemble, assurons-lui les
            meilleurs soins grâce à un suivi personnalisé, pour que cette
            nouvelle histoire végétale s'épanouisse pleinement sous vos yeux !
          </p>
         <a href="ajoutPlante.php"><span class="btn_ajout">Ajouter une plante</span></a>
        </div>
      </section>
      <section>
        <div id="boxRepertoire">
          <h2><a href="repertoire.php">Répertoire Botanique</a></h2>
          <div class="slide">
            <?php if ($repBotanique) { ?>
              <?php foreach ($repBotanique as $fleur) { ?>
                <div class="box-repertoire" data-id="<?=$fleur['id']?>">
                    <?php 
                    $img_path = "uploads/fleurs/small/" . $fleur['id'] . ".webp";
                    if (file_exists($img_path)) { ?>
                      <div class="boxRepertoire__picture">
                        <img src="<?=$img_path?>" alt="<?php echo $fleur['title']; ?>"/>
                      </div>
                    <?php } ?>
                  <div class="boxRepertoire__name">
                    <h3><?php echo $fleur['title']; ?></h3>
                    <p><?php echo truncate($fleur['description'], 50); ?></p>
                  </div>
                </div>
                <?php } ?>
              <?php } ?>
          </div>
        </div>
      </section>
      <section class="newletter">
        <?php include ('layout/boxPetale.php'); ?>

          <h2>Inscription à la Newletter</h2>
          <p>
            Envie d'une touche de verdure et de bonheur végétal directement dans
            votre boîte mail ? Inscrivez-vous à notre newsletter pour recevoir
            des conseils et des surprises !
          </p>
          <div>
            <input
              class="input-mail"
              type="email"
              id="mail"
              name="user_mail"
              required
              placeholder="email"
            />
          </div>
          <div>
            <span class="btn_ajout">Valider</span>
          </div>
        </div>
      </section>

      <section class="box-advice">
        <div>
          <h2>Conseil du jour</h2>
          <div>
            Opération "Zéro Bestiole" (et la nature te dit merci !) Marre de ces
            petites bêtes qui squattent tes plantes sans payer le loyer ? Pas de
            panique, on a LA solution écolo qui va les faire fuir à toutes
            jambes (ou à toutes pattes, selon l'espèce) !
          </div>
          <div class="accordion">
            <div class="accordion__bloc">
              <div class="accordion__title">
                La potion magique "fait maison"
                <span class="caret"><span class="caret-down">↓</span></span>
              </div>
              <div class="accordion__answer-bloc">
                <div class="accordion__answer">
                  Prépare-toi à devenir la sorcierère des plantes ! Mélange un
                  peu de savon noir (oui, celui qui sent bon le propre et le
                  naturel) avec de l'eau tiède. Verse cette mixture dans un
                  pulvérisateur, et pshiiit ! Arrose généreusement les feuilles
                  infestées. Les petites indésirables n'y verront que du feu
                  (enfin, du savon) et iront voir ailleurs si l'herbe est plus
                  verte. C'est comme une douche surprise, mais qui nettoie les
                  parasites !
                </div>
              </div>
            </div>

            <div class="accordion__bloc">
              <div class="accordion__title">
                Les gardes du corps aromatiques
                <span class="caret"><span class="caret-down">↓</span></span>
              </div>
              <div class="accordion__answer-bloc">
                <div class="accordion__answer">
                  Envie de mettre en place une véritable brigade anti-insectes ?
                  Plante de l'ail ou du basilic à proximité de tes protégées.
                  Ces deux là sont les videurs de boîte de nuit du monde végétal
                  : leur odeur forte repousse naturellement les insectes. Non
                  seulement tu protèges tes plantes, mais en plus, tu auras de
                  quoi agrémenter tes petits plats ! Double bénéfice, zéro prise
                  de tête.
                </div>
              </div>
            </div>
          
          <div class="accordion__bloc">
            <div class="accordion__title">
              Le Super-Héros qui Pique
              <span class="caret"><span class="caret-down">↓</span></span>
            </div>
            <div class="accordion__answer-bloc">
              <div class="accordion__answer">
                Ah, l'ortie ! On la fuit comme la peste à cause de ses petits
                coups de jus, mais figure-toi qu'elle a un super-pouvoir caché.
                C'est la kryptonite des nuisibles, surtout de ces envahisseurs
                relous que sont les pucerons ! Alors oui, elle est mal-aimée, un
                peu comme le brocoli pour certains, mais son purin est un
                véritable élixir de jardinier. Pour le concocter, c'est simple
                comme bonjour (et un peu odorant, on ne va pas se mentir) : Fais
                macérer quelques feuilles d'ortie dans de l'eau (imagine-les
                prendre un bon bain relaxant). Laisse la magie opérer quelques
                jours, et hop ! Tu obtiendras une potion maison qui va faire
                fuir les indésirables à des kilomètres à la ronde. C'est un peu
                le parfum "anti-nuisibles" haut de gamme, version nature et
                fauchée.
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="box-forum">
        <div class="forum">
          <h2>Forum</h2>
          <div class="question">
            <div class="question_1">
              <h3>Jardin aquatique</h3>
              <div class="container-box-forum">
                <div class="container-box-icon">
                  <div class="box-icon">
                    <img src="<?php echo images_dir ?>lotus_iconzon.webp" alt="image d'une icone de lotus"/>
                    <img src="<?php echo images_dir ?>icones/lotus.gif" alt="image d'une icone de lotus animé" />
                  </div>
                </div>
                <p>
                  Votre jardin s’est construit au fil et autour de l’eau. Vous
                  rêvez d’un bassin ou d’une piscine naturelle. A l’aide des
                  conseils avisés des jardinautes, jetez vous à l’eau !
                </p>
                <div class="number-answer">4 réponses</div>
              </div>
              <p class="pseudo">par BelleDeNuit le 26/03/2025</p>
            </div>
            <div class="question_2">
              <h3>Jardin d'agrément</h3>
              <div class="container-box-forum">
                <div class="container-box-icon">
                  <div class="box-icon">
                    <img src="<?php echo images_dir ?>tournesol_11zon.webp" alt="image d'une icone de tournesol"/>
                    <img src="<?php echo images_dir ?>icones/tournesol.gif" alt="image d'une icone de tournesol animé"/>
                  </div>
                </div>
                <p>
                  Plantes vivaces ou carnivores, rosiers, jasmin ou lilas : vos
                  plantes font votre jardin. Au gré des saisons, partagez votre
                  goût des belles plantes.
                </p>
                <div class="number-answer">68 réponses</div>
              </div>
              <p class="pseudo">par JOLIE FLEUFLEUR le 01/04/2025</p>
            </div>
            <div class="question_3">
              <h3>Jardiner avec la lune</h3>
              <div class="container-box-forum">
                <div class="container-box-icon">
                  <div class="box-icon">
                    <img src="<?php echo images_dir ?>croissant-de-lune_11zon.webp" alt="image d'une icone d'une lune"/>
                    <img src="<?php echo images_dir ?>icones/croissant-de-lune.gif" alt="image d'une icone d'une lune animé"/>
                  </div>
                </div>
                <p>
                  Vous avez rendez vous avec la lune... ne cherchez plus, c'est
                  ici!
                </p>
                <div class="number-answer">25 réponses</div>
              </div>
              <p class="pseudo">par AlbertD le 02/02/2025</p>
            </div>
          </div>
        </div>
      </section>
      <div class="container-decouverte">
        <section class="box-music">
          <div class="music">
            <a href="musiqueDesPlantes.php">
              <h2>Découverte de la musique des plantes</h2>
              <svg
                class="logo-entre"
                version="1.0"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 3262.000000 3223.000000"
                preserveAspectRatio="xMidYMid meet"
              >
                <g
                  transform="translate(0.000000,3223.000000) scale(0.100000,-0.100000)"
                  fill="#FFFFFF"
                  stroke="block"
                >
                  <path
                    d="M5399 31086 c-2 -2 -62 -6 -134 -10 -1280 -61 -2504 -734 -3261
-1792 -266 -371 -489 -817 -618 -1234 -70 -227 -133 -515 -157 -713 -5 -51
-12 -103 -14 -117 -3 -14 -8 -77 -12 -140 -10 -147 -10 -21668 -1 -21815 61
-901 404 -1753 997 -2469 101 -123 351 -377 484 -493 650 -564 1457 -922 2312
-1027 218 -26 595 -27 11205 -24 9970 4 10895 5 11005 20 617 83 1131 251
1621 528 1044 590 1793 1576 2079 2735 43 174 86 415 100 560 4 39 10 84 13
100 10 48 11 21776 1 21905 -13 166 -35 321 -75 520 -226 1132 -901 2126
-1876 2764 -635 414 -1355 651 -2118 695 -136 8 -21542 15 -21551 7z m21681
-1030 c19 -4 82 -14 140 -22 146 -21 400 -84 557 -138 843 -290 1522 -893
1912 -1696 178 -367 279 -735 320 -1170 5 -56 8 -4583 8 -10910 -2 -10354 -3
-10821 -20 -10950 -101 -760 -427 -1422 -961 -1953 -480 -477 -1105 -799
-1771 -912 -270 -45 301 -43 -11155 -43 -5948 0 -10850 4 -10893 8 -796 85
-1459 392 -2011 930 -555 542 -884 1211 -983 2000 -17 139 -18 585 -18 10970
0 10377 1 10831 18 10965 53 413 150 739 323 1090 360 731 972 1300 1731 1609
350 142 760 229 1113 235 63 1 115 3 116 4 6 6 21545 -11 21574 -17z"
                  />
                  <path
                    d="M5285 29563 c-800 -65 -1538 -474 -2019 -1118 -300 -401 -469 -820
-543 -1350 -16 -112 -17 -833 -21 -10800 -2 -7548 0 -10731 8 -10855 18 -297
56 -504 135 -747 279 -851 954 -1523 1807 -1798 144 -47 278 -78 458 -107
l145 -23 10850 0 c10361 0 10856 1 10975 18 847 121 1569 590 2018 1310 231
371 373 804 411 1252 12 145 12 21492 0 21635 -32 373 -120 691 -284 1025
-320 653 -875 1150 -1563 1401 -167 61 -409 120 -567 139 -33 4 -69 10 -80 14
-20 6 -21655 11 -21730 4z m12990 -7889 c185 -32 376 -110 534 -216 59 -40
562 -537 2259 -2232 1443 -1441 2205 -2210 2248 -2266 79 -104 175 -294 209
-415 117 -412 42 -838 -208 -1170 -104 -138 -4359 -4391 -4487 -4485 -216
-158 -500 -250 -777 -250 -654 0 -1214 483 -1309 1130 -20 136 -15 343 10 459
40 182 126 377 228 516 29 40 488 508 1062 1083 l1011 1012 -4890 1 c-2690 0
-4910 2 -4935 5 -164 18 -338 68 -465 132 -381 191 -649 553 -721 977 -20 120
-15 370 11 485 58 259 170 465 360 656 205 207 432 326 713 374 112 20 194 20
5020 20 l4907 0 -1016 1018 c-1101 1102 -1085 1085 -1184 1295 -231 488 -137
1080 233 1469 212 222 443 348 745 403 103 18 333 18 442 -1z"
                  />
                </g>
              </svg>
            </a>
          </div>
        </section>
        <section class="box-bbg">
          <div class="bbg">
            <a href="soinDesPlantes.php">
              <h2>Découverte des soins de façon vertueuse</h2>
              <svg
                class="logo-entre"
                version="1.0"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 3262.000000 3223.000000"
                preserveAspectRatio="xMidYMid meet"
              >
                <g
                  transform="translate(0.000000,3223.000000) scale(0.100000,-0.100000)"
                  fill="#FFFFFF"
                  stroke="block"
                >
                  <path
                    d="M5399 31086 c-2 -2 -62 -6 -134 -10 -1280 -61 -2504 -734 -3261
        -1792 -266 -371 -489 -817 -618 -1234 -70 -227 -133 -515 -157 -713 -5 -51
        -12 -103 -14 -117 -3 -14 -8 -77 -12 -140 -10 -147 -10 -21668 -1 -21815 61
        -901 404 -1753 997 -2469 101 -123 351 -377 484 -493 650 -564 1457 -922 2312
        -1027 218 -26 595 -27 11205 -24 9970 4 10895 5 11005 20 617 83 1131 251
        1621 528 1044 590 1793 1576 2079 2735 43 174 86 415 100 560 4 39 10 84 13
        100 10 48 11 21776 1 21905 -13 166 -35 321 -75 520 -226 1132 -901 2126
        -1876 2764 -635 414 -1355 651 -2118 695 -136 8 -21542 15 -21551 7z m21681
        -1030 c19 -4 82 -14 140 -22 146 -21 400 -84 557 -138 843 -290 1522 -893
        1912 -1696 178 -367 279 -735 320 -1170 5 -56 8 -4583 8 -10910 -2 -10354 -3
        -10821 -20 -10950 -101 -760 -427 -1422 -961 -1953 -480 -477 -1105 -799
        -1771 -912 -270 -45 301 -43 -11155 -43 -5948 0 -10850 4 -10893 8 -796 85
        -1459 392 -2011 930 -555 542 -884 1211 -983 2000 -17 139 -18 585 -18 10970
        0 10377 1 10831 18 10965 53 413 150 739 323 1090 360 731 972 1300 1731 1609
        350 142 760 229 1113 235 63 1 115 3 116 4 6 6 21545 -11 21574 -17z"
                  />
                  <path
                    d="M5285 29563 c-800 -65 -1538 -474 -2019 -1118 -300 -401 -469 -820
        -543 -1350 -16 -112 -17 -833 -21 -10800 -2 -7548 0 -10731 8 -10855 18 -297
        56 -504 135 -747 279 -851 954 -1523 1807 -1798 144 -47 278 -78 458 -107
        l145 -23 10850 0 c10361 0 10856 1 10975 18 847 121 1569 590 2018 1310 231
        371 373 804 411 1252 12 145 12 21492 0 21635 -32 373 -120 691 -284 1025
        -320 653 -875 1150 -1563 1401 -167 61 -409 120 -567 139 -33 4 -69 10 -80 14
        -20 6 -21655 11 -21730 4z m12990 -7889 c185 -32 376 -110 534 -216 59 -40
        562 -537 2259 -2232 1443 -1441 2205 -2210 2248 -2266 79 -104 175 -294 209
        -415 117 -412 42 -838 -208 -1170 -104 -138 -4359 -4391 -4487 -4485 -216
        -158 -500 -250 -777 -250 -654 0 -1214 483 -1309 1130 -20 136 -15 343 10 459
        40 182 126 377 228 516 29 40 488 508 1062 1083 l1011 1012 -4890 1 c-2690 0
        -4910 2 -4935 5 -164 18 -338 68 -465 132 -381 191 -649 553 -721 977 -20 120
        -15 370 11 485 58 259 170 465 360 656 205 207 432 326 713 374 112 20 194 20
        5020 20 l4907 0 -1016 1018 c-1101 1102 -1085 1085 -1184 1295 -231 488 -137
        1080 233 1469 212 222 443 348 745 403 103 18 333 18 442 -1z"
                  />
                </g>
              </svg>
            </a>
          </div>
        </section>
      </div>
    </main>
    <?php include ('layout/footer.php'); ?>
  </body>
</html>
