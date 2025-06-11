import "./components/MenuAccordion.js";

// Initialisation du menu sur site Version JS
import "./components/AfficherPlus.js"
import { Menu } from "./components/Menu.js";

window.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('menu-js')) {
        let Navigation = new Menu;
        Navigation.renderMenu();
        Navigation.renderMenuIcons();
    } else {
        const menuBurgerIcon = document.querySelector('.burger');
        const $html = document.querySelector('html');

        menuBurgerIcon.addEventListener('click', function() {
        //    this.classList.toggle('burger-open');
        //    MainNavigation.classList.toggle('mobileNav-open');

        setTimeout(() => {
            $html.classList.add('switch-menu');

            $html.classList.toggle('has-menu');
        }, 300);

        $html.classList.remove('switch-menu');
        });

    }
});
