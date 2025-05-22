const titles = document.querySelectorAll('.accordion__title');
console.log(titles);

titles.forEach(function(item){
    item.addEventListener("click", function(){
        const block = item.parentElement;
        console.log(block);
        const wrapper = block.querySelector(".accordion__answer-bloc");
        const reponse = block.querySelector(".accordion__answer");
        console.log(wrapper, reponse);

        const estOuvert = block.classList.contains("active");

        document.querySelectorAll(".accordion__bloc").forEach(function(bloc){
            bloc.classList.remove("active");
            bloc.querySelector(".accordion__answer-bloc").style.height = 0;
        })
        
         if (!estOuvert) {
           wrapper.style.height = reponse.clientHeight + "px";
           console.log(reponse.clientHeight);
           block.classList.add("active");
        }
    })
});


