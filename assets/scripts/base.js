import { Menu } from "./components/Menu";


window.addEventListener('DOMContentLoaded', function() {
    let Navigation = new Menu;
    Navigation.renderMenu();
    Navigation.renderMenuIcons();
});