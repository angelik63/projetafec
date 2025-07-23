document.addEventListener('DOMContentLoaded', function() {
    const loupeElement = document.getElementById('loupe');
    const searchBarForm = document.querySelector('.search-bar');
    const plantSearchInput = document.getElementById('plantSearchInput'); 

    
    if (!loupeElement || !searchBarForm || !plantSearchInput) {
        console.error("Erreur: Un ou plusieurs éléments DOM requis pour la recherche sont introuvables. Vérifiez les ID et classes.");
        return; 
    }

    // Fonction pour basculer la classe 'active'
    function toggleSearchBar() {
        searchBarForm.classList.toggle('active'); 

        if (searchBarForm.classList.contains('active')) {
            plantSearchInput.focus();
        } else {
            plantSearchInput.value = '';
        }
    }

   
    loupeElement.addEventListener('click', function(event) {
        event.stopPropagation();
        toggleSearchBar();
    });

  
    document.addEventListener('click', function(event) {
        const isClickInsideSearchBar = searchBarForm.contains(event.target);
        const isClickOnLoupe = loupeElement.contains(event.target);

        if (!isClickInsideSearchBar && !isClickOnLoupe && searchBarForm.classList.contains('active')) {
            toggleSearchBar();
        }
    });

    // Empêcher la fermeture quand on clique à l'intérieur de la barre de recherche elle-même
    searchBarForm.addEventListener('click', function(event) {
        event.stopPropagation(); 
    });
});