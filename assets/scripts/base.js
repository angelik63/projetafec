import { Menu } from "./components/Menu";
import "./components/MenuAccordion";

window.addEventListener('DOMContentLoaded', function() {
    let Navigation = new Menu;
    Navigation.renderMenu();
    Navigation.renderMenuIcons();
});
