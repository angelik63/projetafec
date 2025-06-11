    const myBtn = document.getElementById("myBtn");
    const dots = document.getElementById("dots");
    const moreText = document.getElementById("more");

    if (myBtn && dots && moreText) {
        myBtn.addEventListener('click', function() {
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                myBtn.innerHTML = "Afficher plus";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                myBtn.innerHTML = "Afficher moins";
                moreText.style.display = "inline";
            }
        });
    }
    