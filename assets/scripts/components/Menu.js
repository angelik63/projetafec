import { links, linksIcons } from "../data/menu";

export class Menu {

    constructor() {
        this.menuContainer      = document.getElementById('menu-js');
        this.menuIconsContainer = document.getElementById('menu-icons-js');
        this.$html              = document.querySelector('html');
    }

    renderMenu() {
        let menuHtml = '<ul>';

        links.forEach(element => {
            menuHtml += `<li class="menu-item"><a href="${element.url}" title="${element.title}">${element.title}</a></li>`;
        });

        menuHtml += '</ul>';

        this.appendMenu(menuHtml);
    }

    appendMenu(menu) {
        this.menuContainer.innerHTML = menu;
    }

    renderMenuIcons() {
        let menuHtml = '<ul>';

        linksIcons.forEach(element => {
            menuHtml += `<li><a class="${element.class}" href="${element.url}"><img src="images/icones/${element.img}" alt="${element.title}"/></a></li>`;
        });

        menuHtml += '</ul>';

        this.appendMenuIcons(menuHtml);

        // Ajouter l'événement après le rendu
        this.addBurgerClickEvent();
    }

    appendMenuIcons(menu) {
        this.menuIconsContainer.innerHTML = menu;
    }

    addBurgerClickEvent() {
        const burgers = this.menuIconsContainer.querySelectorAll('.burger');
        burgers.forEach(burger => {
            burger.addEventListener('click', (event) => {
                event.preventDefault();
                setTimeout(() => {
                    this.$html.classList.add('switch-menu');
            
                    this.$html.classList.toggle('has-menu');
                   }, 300);
            
                   this.$html.classList.remove('switch-menu');
            });
        });
    }

}