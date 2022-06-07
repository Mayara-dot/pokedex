document.addEventListener('DOMContentLoaded', () => {
    //Funcao de abrir e fechar o modal

    function openModal($el) {
        $el.classList.add('is-active');
    }

    function closeModal($el) {
        $el.classList.remove('is-active');
    }

    //Adiciona o evento de click para abrir o modal especifico

    (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
        const modal = $trigger.dataset.target;
        const $id = $trigger.id;
        const $target = document.getElementById(modal);

        $trigger.addEventListener('click', () => {
        openModal($target);  //abre o modal
        displayCardPokemon($id); //mostra as caracteristicas do pokemon escolhido
        });
    });

    //Adiciona evento de click em varios elementos filhos para fechar o elemeto pai

    (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot #closeModal') 
    || []).forEach(($close) => {
        const $target = $close.closest('.modal');

        $close.addEventListener('click', () => {
        closeModal($target);
        });
    });

});



async function displayCardPokemon(id) {
    //console.log("Acessou" + id);
    const data = await fetch("/../php/displayContentModal.php?id=" + id);
    const result = await data.json();
    console.log(result);


    if(result["erro"]) {
     console.log(result["msg"])
    } else {
        document.getElementById("namePokemon").innerHTML = result["data"].name;
        document.getElementById("imgPokemon").src = result["data"].img;

        document.getElementById("typePokemon").innerHTML = result["data"].type;

        document.getElementById("weaknessePokemon").innerHTML = result["data"].weaknesses;
        document.getElementById("nextEvolutionPokemon").innerHTML = result["data"].nextEvolution;

    }
    
};

