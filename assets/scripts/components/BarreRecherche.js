    const loupeElement = document.getElementById('loupe');
    const searchBarForm = document.querySelector('.search-bar');
    const plantSearchInput = document.getElementById('plantSearchInput'); 
    const userIcon = document.getElementById('user-icon'); 
    const bellIcon = document.getElementById('bell-icon'); 


    // Fonction pour masquer toutes les icônes
    function hideAllIcons() {
        if (loupeElement) loupeElement.style.display = 'none';
        if (userIcon) userIcon.style.display = 'none';
        if (bellIcon) bellIcon.style.display = 'none';
    }

    // Fonction pour afficher toutes les icônes
    function showAllIcons() {
        // On remet le display approprié, qui peut être 'block' ou 'inline-block' selon votre CSS de base
        if (loupeElement) loupeElement.style.display = ''; // Remet au display par défaut du CSS
        if (userIcon) userIcon.style.display = ''; // Remet au display par défaut du CSS
        if (bellIcon) bellIcon.style.display = ''; // Remet au display par défaut du CSS
    }

    // 2. Gestion du clic sur la loupe (point d'entrée principal pour ouvrir/fermer la barre)
    if (loupeElement && searchBarForm && plantSearchInput) {
        loupeElement.addEventListener('click', function(event) {
            event.stopPropagation(); // Empêche le clic de se propager au document et de fermer immédiatement
            toggleSearchBar();
        });
    }

    // Fonction pour basculer l'état de la barre de recherche et des icônes
    function toggleSearchBar() {
        if (searchBarForm.style.display === 'none' || searchBarForm.style.display === '') {
            // La barre est cachée, on l'affiche
            searchBarForm.style.display = 'block'; // Ou 'flex', 'grid'
            hideAllIcons(); // Les icônes disparaissent
            plantSearchInput.focus(); // On met le focus sur le champ
        } else {
            // La barre est visible, on la cache
            searchBarForm.style.display = 'none';
            showAllIcons(); // Les icônes réapparaissent
            plantSearchInput.value = ''; // Optionnel: vider le champ à la fermeture
        }
    }

    // 3. Gérer les clics en dehors de la barre de recherche pour la fermer (et réafficher les icônes)
    document.addEventListener('click', function(event) {
        // Si l'élément cliqué n'est ni la barre de recherche, ni le champ de recherche, ni la loupe elle-même,
        // et que la barre de recherche est actuellement visible, alors la fermer.
        const isClickInsideSearchBar = searchBarForm.contains(event.target);
        const isClickOnLoupe = loupeElement && loupeElement.contains(event.target);

        if (!isClickInsideSearchBar && !isClickOnLoupe &&
            (searchBarForm.style.display === 'block' || searchBarForm.style.display === 'flex' || searchBarForm.style.display === 'grid')) {
            toggleSearchBar(); // Utilise la même fonction pour fermer
        }
    });

    // 4. Empêcher la fermeture quand on clique DANS la barre de recherche elle-même
    // sans forcément cliquer sur l'input (par exemple sur le bouton ou la zone vide du form)
    if (searchBarForm) {
        searchBarForm.addEventListener('click', function(event) {
            event.stopPropagation(); // Empêche le clic de se propager au document
        });
    }


    // 5. Gestion du changement de placeholder (Votre code existant)
    function updateSearchPlaceholder() {
        const minWidthDesktop = 1024;
        if (window.innerWidth < minWidthDesktop) {
            plantSearchInput.placeholder = "Rechercher";
        } else {
            plantSearchInput.placeholder = "Rechercher une plante";
        }
    }
    updateSearchPlaceholder();
    window.addEventListener('resize', updateSearchPlaceholder);