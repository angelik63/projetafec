import { links, linksIcons } from "../data/menu";

export class Menu {

    constructor() {
        this.menuContainer      = document.getElementById('menu-js');
        this.menuIconsContainer = document.getElementById('menu-icons-js');
        this.$html              = document.querySelector('html');
    }


    renderMenu() {
        let menuHtml = `<ul>`;

        links.forEach(element => {
            menuHtml += `<li class="menu-item"><a href="${element.url}" title="${element.title}">${element.title}</a></li>`;
        });

        menuHtml += `</ul>`;

        this.appendMenu(menuHtml);
    }

    appendMenu(menu) {
        this.menuContainer.innerHTML = menu;
    }

    renderMenuIcons() {
        let menuHtml = `<ul>`;

        linksIcons.forEach(element => {
            menuHtml += `<li><a class="${element.class}" href="${element.url}"><img src="images/icones/${element.img}" alt="${element.title}"/></a></li>`;
        });

        menuHtml += `</ul>`;

        this.appendMenuIcons(menuHtml);

    }

    appendMenuIcons(menu) {
        this.menuIconsContainer.innerHTML = menu;
    }

}