    <header>
      <div class="site-header">
        <a
          href="index.php"
          tile="logo du site ramenant sur la page d'accueil"
        >
        <img
          src="<?php echo images_dir ?>logo plante ArrosoMoi_11zon.webp"
          id="logo"
          alt="logo plante avec arrosoir"
        /></a>
        <form  class="search-bar" method="get" action="listing.php" >
               <input name="keywords" type="search" id="plantSearchInput" placeholder="Recherche">
               <button type="submit">Go !</button>
           </form>

         <nav class="logo-header">
            
         <ul>
              <li><img id="loupe" src="<?php echo images_dir ?>icones/search.svg" alt="Rechercher"></li>
              <li><a href="connexion.php" title="logo qui ramene sur la page de connexion"><img id="user-icon" src="<?php echo images_dir ?>icones/user.svg"></a></li>
              <li><a href="modal-notif.php"><img id="bell-icon" src="<?php echo images_dir ?>/icones/bell.svg"></a></li>
              <li><span class="burger" href=""><img src="<?php echo images_dir ?>burger.svg" ></span></li>
            </ul>
          </nav>
        <nav class="nav">
          <ul>
            <?php foreach ($menu as $itemMenu) { ?>
            <li class="menu-item">
              <a href="<?php echo $itemMenu['url']; ?>" 
              <?php echo (isset($pageName) && ($pageName == $itemMenu['pagename'])) ? ' class="selected' : ''; ?>
              title="<?php echo $itemMenu['title']; ?>">
                <?php echo $itemMenu['title']; ?>
              </a>
            </li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </header>