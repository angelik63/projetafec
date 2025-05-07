document.addEventListener("DOMContentLoaded", (event) => {
    const menuBurgerIcon = document.querySelector('.burger');
    const MainNavigation = document.querySelector('.nav');
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

});