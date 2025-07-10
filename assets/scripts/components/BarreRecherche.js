document.addEventListener('DOMContentLoaded', function() {
    const loupeElement = document.getElementById('loupe');
    const searchBarForm = document.querySelector('.search-bar');

    // Fonction pour basculer l'affichage de la barre de recherche
    function toggleSearchBar() {
        if (searchBarForm.style.display === 'none') {
            searchBarForm.style.display = 'block'; // Affiche la barre de recherche
            document.getElementById('plantSearchInput').focus(); // Met le focus sur le champ de recherche
        } else {
            searchBarForm.style.display = 'none'; // Masque la barre de recherche
        }
    }

    // Ajoute un écouteur d'événement pour le clic sur la loupe
    if (loupeElement) {
        loupeElement.addEventListener('click', function(event) {
            event.stopPropagation(); // Empêche le clic de se propager
            toggleSearchBar();
        });
    }

    // Gérer les clics en dehors de la barre de recherche pour la fermer
    document.addEventListener('click', function(event) {
        const isClickInsideSearchBar = searchBarForm.contains(event.target);
        const isClickOnLoupe = loupeElement.contains(event.target);

        if (!isClickInsideSearchBar && !isClickOnLoupe && searchBarForm.style.display === 'block') {
            toggleSearchBar();
        }
    });

    // Empêcher la fermeture quand on clique dans la barre de recherche elle-même
    if (searchBarForm) {
        searchBarForm.addEventListener('click', function(event) {
            event.stopPropagation(); // Empêche le clic de se propager au document
        });
    }
});
