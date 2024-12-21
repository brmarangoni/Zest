let activeSuggestionIndex = -1; // Índice da sugestão atualmente selecionada

document.getElementById("searchInput").addEventListener("input", function () {
    showSuggestions(); // Mostra as sugestões enquanto o usuário digita
});

document.getElementById("searchInput").addEventListener("keydown", function (event) {
    const suggestionsList = document.getElementById("suggestionsList");
    const suggestions = suggestionsList.querySelectorAll(".suggestion-item");

    if (event.key === "ArrowDown") {
        // Desce na lista de sugestões
        activeSuggestionIndex = (activeSuggestionIndex + 1) % suggestions.length;
        updateActiveSuggestion(suggestions);
    } else if (event.key === "ArrowUp") {
        // Sobe na lista de sugestões
        activeSuggestionIndex = (activeSuggestionIndex - 1 + suggestions.length) % suggestions.length;
        updateActiveSuggestion(suggestions);
    } else if (event.key === "Enter") {
        // Seleciona a sugestão ativa ao pressionar Enter
        if (activeSuggestionIndex >= 0 && suggestions[activeSuggestionIndex]) {
            const selectedSuggestion = suggestions[activeSuggestionIndex];
            const page = selectedSuggestion.getAttribute("data-page");
            if (page) {
                window.location.href = page; // Redireciona para a página correspondente
            }
        } else {
            searchMachine(); // Realiza a busca padrão se nenhuma sugestão estiver ativa
        }
    }
});

function updateActiveSuggestion(suggestions) {
    suggestions.forEach((item, index) => {
        if (index === activeSuggestionIndex) {
            item.classList.add("active");
            item.scrollIntoView({ block: "nearest" }); // Garante que o item ativo fique visível
        } else {
            item.classList.remove("active");
        }
    });
}

function showSuggestions() {
    const searchInput = document.getElementById("searchInput").value.toLowerCase();
    const suggestionsList = document.getElementById("suggestionsList");
    suggestionsList.innerHTML = ''; // Limpa a lista de sugestões
    activeSuggestionIndex = -1; // Reseta o índice ativo

    if (searchInput === '') {
        suggestionsList.style.display = 'none'; // Esconde as sugestões se o campo de pesquisa estiver vazio
        return;
    }

    const machinesMap = [
        { name: "3D Multi Abductor", keywords: ["3d", "3d multi abductor"], page: "../projetos/glutebuilder.html#3dMultiAbductor", img: "projetos/img/3d.png" },
        { name: "Deadlift Elite", keywords: ["deadlift", "deadlift elite"], page: "../projetos/glutebuilder.html#DeadliftElite", img: "projetos/img/deadlift.png" },
        { name: "Dual 45 Hip Extension", keywords: ["dualhip", "dual 45 hip extension"], page: "../projetos/glutebuilder.html#Dual45HipExtension", img: "projetos/img/dual-45.png" },
        { name: "Hip Thrust", keywords: ["hipthrust", "hip thrust"], page: "../projetos/glutebuilder.html#HipThrust", img: "projetos/img/hip-trhust.png" },
        { name: "Kneeling Glute Isolator", keywords: ["kneelingglute", "kneeling glute isolator"], page: "../projetos/glutebuilder.html#KneelingGluteIsolator", img: "projetos/img/kelleing.png" },
        { name: "Pendulum Kick Back", keywords: ["pendulum", "pendulum kick back"], page: "../projetos/glutebuilder.html#PendulumKickBack", img: "projetos/img/pendulum.png" },
        { name: "Glutebuilder V2", keywords: ["glutebuilderv2", "glutebuilder v2"], page: "../projetos/glutebuilder.html#GlutebuilderV2", img: "projetos/img/v2.png" },
        { name: "Glutebuilder Box", keywords: ["box", "glutebuilderbox"], page: "../projetos/glutebuilder.html#GlutebuilderBox", img: "projetos/img/box.png" },
        // NewEpic
        
        
        // Bravo
        { name: "Abdominal Crunch", keywords: ["abdominal crunch"], page: "../equipamentos/bravo.html#abdominalCrunch", img: "equipamentos/img/abdominal crunch.png" },
        { name: "Abdutor Articulado", keywords: ["abdutor articulado"], page: "../equipamentos/bravo.html#abdutorArticulado", img: "equipamentos/img/abdutor articulado.png" },
        { name: "Abdutor em Pé Articulado", keywords: ["abdutor em pé articulado"], page: "../equipamentos/bravo.html#abdutorEmPeArticulado", img: "equipamentos/img/abdutor-em-pé.png" },
        { name: "Agachamento Pêndulo Articulado", keywords: ["agachamento pêndulo articulado"], page: "../equipamentos/bravo.html#agachamentoPenduloArticulado", img: "equipamentos/img/agachamento-pendulo.png" },
        { name: "Banco Supino Reto Articulado", keywords: ["banco supino reto articulado"], page: "../equipamentos/bravo.html#bancoSupinoRetoArticulado", img: "equipamentos/img/banco-supino-reto.png" },
        { name: "Belt Squat Articulado", keywords: ["belt squat articulado"], page: "../equipamentos/bravo.html#BeltSquatarticulado", img: "equipamentos/img/belt-squat.png" },
        { name: "Bíceps Articulado", keywords: ["bíceps articulado"], page: "../equipamentos/bravo.html#bícepsArticulado", img: "equipamentos/img/bíceps-articulado.png" },
        { name: "Desenvolvimento Articulado", keywords: ["desenvolvimento articulado"], page: "../equipamentos/bravo.html#desenvolvimentoArticulado", img: "equipamentos/img/desenvolvimento articulado.png" },
        { name: "Elevação Lateral Articulada", keywords: ["elevação lateral articulada"], page: "../equipamentos/bravo.html#elevaçãoLateralArticulada", img: "equipamentos/img/elevação-lateral.png" },
        { name: "Elevação Lateral em Pé Articulada", keywords: ["elevação lateral em pé articulada"], page: "../equipamentos/bravo.html#elevaçãoLateralEmPéArticulada", img: "equipamentos/img/elevação-lateral-articulada.png" },
        { name: "Elevação Pélvica Articulada", keywords: ["elevação pélvica articulada"], page: "../equipamentos/bravo.html#elevaçãoPélvicaArticulada", img: "equipamentos/img/elevação-pélvica.png" },
        { name: "Extensor Articulado", keywords: ["extensor articulado"], page: "../equipamentos/bravo.html#extensorArticulado", img: "equipamentos/img/extensor-articulado.png" },
        { name: "Extensor Unilateral Articulado", keywords: ["extensor unilateral articulado"], page: "../equipamentos/bravo.html#extensorUnilateralArticulado", img: "equipamentos/img/extensor-unilateral.png" },
        { name: "Flexor Unilateral Articulado", keywords: ["flexor unilateral articulado"], page: "../equipamentos/bravo.html#flexorUnilateralArticulado", img: "equipamentos/img/flexor-em-pé-unilateral.png" },
        { name: "Fly Articulado", keywords: ["fly articulado"], page: "../equipamentos/bravo.html#flyArticulado", img: "equipamentos/img/fly-articulado.png" },
        { name: "Fly em Pé Articulado", keywords: ["fly em pé articulado"], page: "../equipamentos/bravo.html#flyEmPéArticulado", img: "equipamentos/img/fly-em-pé-articulado.png" },
        { name: "Hack Squat", keywords: ["hack squat"], page: "../equipamentos/bravo.html#hackSquat", img: "equipamentos/img/hack-squat.png" },
        { name: "Leg Press 45°", keywords: ["leg press 45"], page: "../equipamentos/bravo.html#legPress45", img: "equipamentos/img/leg-press-45.png" },
        { name: "Leg Press Unilateral Articulado", keywords: ["leg press unilateral articulado"], page: "../equipamentos/bravo.html#legPressUnilateralArticulado", img: "equipamentos/img/leg-press-unilateral-articulado.png" },
        { name: "Leg Press Vertical", keywords: ["leg press vertical"], page: "../equipamentos/bravo.html#legPressVertical", img: "equipamentos/img/leg-press-vertical.png" },
        { name: "Power Smith Articulado", keywords: ["power smith articulado"], page: "../equipamentos/bravo.html#powerSmithArticulado", img: "equipamentos/img/power-smith.png" },
        { name: "Power Squat", keywords: ["power squat"], page: "../equipamentos/bravo.html#powerSquat", img: "equipamentos/img/power-squat.png" },
        { name: "Puxada Circular Articulada", keywords: ["puxada circular articulada"], page: "../equipamentos/bravo.html#puxadaCircularArticulada", img: "equipamentos/img/puaxada-circular-articualda.png" },
        { name: "Puxada/Supino Articulado - Dual", keywords: ["puxada supino articulado dual"], page: "../equipamentos/bravo.html#puxadaSupinoArticuladoDual", img: "equipamentos/img/puxada-supino-articulado-dual.png" },
        { name: "Remada Articulada", keywords: ["remada articulada"], page: "../equipamentos/bravo.html#remadaArticulada", img: "equipamentos/img/remada-articulada.png" },
        { name: "Remada Cavalinho", keywords: ["remada cavalinho"], page: "../equipamentos/bravo.html#remadaCavalinho", img: "equipamentos/img/remada-cavalinho.png" },
        { name: "Remada Inferior Articulada", keywords: ["remada inferior articulada"], page: "../equipamentos/bravo.html#remadaInferiorArticulada", img: "equipamentos/img/remada-inferior.png" },
        { name: "Remada Lower Back Articulada", keywords: ["remada lower back articulada"], page: "../equipamentos/bravo.html#remadaLowerBackArticulada", img: "equipamentos/img/remada-lower-back.png" },
        { name: "Supino Declinado Articulado", keywords: ["supino declinado articulado"], page: "../equipamentos/bravo.html#supinoDeclinadoArticulado", img: "equipamentos/img/supino-declinado.png" },
        { name: "Supino Reto Articulado", keywords: ["supino reto articulado"], page: "../equipamentos/bravo.html#supinoRetoArticulado", img: "equipamentos/img/supino-reto-articulado.png" },
        { name: "Supino Wide Chest Articulado", keywords: ["supino wide chest articulado"], page: "../equipamentos/bravo.html#supinoWideChestArticulado", img: "equipamentos/img/supino-wide-chest-articulado.png" },
        { name: "V-Squat", keywords: ["vsquat", "v-squat"], page: "../equipamentos/bravo.html#vSquat", img: "equipamentos/img/v-squat.png" },
        { name: "Wide Pull Down Articulado", keywords: ["wide pull down articulado"], page: "../equipamentos/bravo.html#widePullDownArticulado", img: "equipamentos/img/wide-pull-down-articulado.png" }
        //

    ]
        

    const suggestions = machinesMap.filter(item =>
        item.name.toLowerCase().includes(searchInput)
    );

    if (suggestions.length > 0) {
        suggestionsList.style.display = 'block'; // Exibe a lista de sugestões
        suggestions.forEach(item => {
            const suggestionItem = document.createElement("li");
            suggestionItem.classList.add("suggestion-item");
            
            // Adiciona a imagem à sugestão
            const img = document.createElement("img");
            img.src = item.img;
            img.alt = item.name;
            suggestionItem.appendChild(img);
            
            // Adiciona o nome da máquina à sugestão
            const text = document.createElement("span");
            text.textContent = item.name;
            suggestionItem.appendChild(text);
            
            suggestionItem.setAttribute("data-page", item.page); // Armazena a URL correspondente
            suggestionItem.addEventListener("click", function () {
                window.location.href = item.page; // Redireciona ao clicar na sugestão
            });
            suggestionsList.appendChild(suggestionItem);
        });
    } else {
        suggestionsList.style.display = 'none'; // Esconde a lista se não houver sugestões
    }
}

function searchMachine() {
    const searchInput = document.getElementById("searchInput").value.toLowerCase();


    const machine = machinesMap.find(item =>
        item.keywords.some(keyword => searchInput.includes(keyword))
    );

    if (machine) {
        window.location.href = machine.page;
    } else {
        alert("Máquina não encontrada. Tente outro nome.");
    }
}

