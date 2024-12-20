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
        // Novas máquinas
        { name: "Abdominal Crunch", keywords: ["abdominal crunch"], page: "../equipamentos/bravo.html#AbdominalCrunch", img: "equipamentos/img/abdominal crunch.png" },
        { name: "Abdutor Articulado", keywords: ["abdutor articulado"], page: "../equipamentos/bravo.html#AbdutorArticulado", img: "equipamentos/img/abdutor-articulado.png" },
        { name: "Abdutor em Pé Articulado", keywords: ["abdutor em pé articulado"], page: "../equipamentos/bravo.html#AbdutorEmPeArticulado", img: "equipamentos/img/abdutor-em-pé.png" },
        { name: "Agachamento Pêndulo Articulado", keywords: ["agachamento pêndulo articulado"], page: "../equipamentos/bravo.html#AgachamentoPenduloArticulado", img: "equipamentos/img/agachamento-pendulo.png" },
        { name: "Banco Supino Reto Articulado", keywords: ["banco supino reto articulado"], page: "../equipamentos/bravo.html#BancoSupinoRetoArticulado", img: "equipamentos/img/banco-supino-reto.png" },
        { name: "Belt Squat Articulado", keywords: ["belt squat articulado"], page: "../equipamentos/bravo.html#BeltSquatArticulado", img: "equipamentos/img/belt-squat.png" },
        { name: "Bíceps Articulado", keywords: ["bíceps articulado"], page: "../equipamentos/bravo.html#BicepsArticulado", img: "equipamentos/img/biceps-articulado.png" },
        { name: "Desenvolvimento Articulado", keywords: ["desenvolvimento articulado"], page: "../equipamentos/bravo.html#DesenvolvimentoArticulado", img: "equipamentos/img/desenvolvimento-articulado.png" },
        { name: "Elevação Lateral Articulada", keywords: ["elevação lateral articulada"], page: "../equipamentos/bravo.html#ElevacaoLateralArticulada", img: "equipamentos/img/elevacao-lateral.png" },
        { name: "Elevação Lateral em Pé Articulada", keywords: ["elevação lateral em pé articulada"], page: "../equipamentos/bravo.html#ElevacaoLateralEmPeArticulada", img: "equipamentos/img/elevacao-lateral-pe.png" },
        { name: "Elevação Pélvica Articulada", keywords: ["elevação pélvica articulada"], page: "../equipamentos/bravo.html#ElevacaoPelvicaArticulada", img: "equipamentos/img/elevacao-pelvica.png" },
        { name: "Extensor Articulado", keywords: ["extensor articulado"], page: "../equipamentos/bravo.html#ExtensorArticulado", img: "equipamentos/img/extensor-articulado.png" },
        { name: "Extensor Unilateral Articulado", keywords: ["extensor unilateral articulado"], page: "../equipamentos/bravo.html#ExtensorUnilateralArticulado", img: "equipamentos/img/extensor-unilateral.png" },
        { name: "Flexor Articulado", keywords: ["flexor articulado"], page: "../equipamentos/bravo.html#FlexorArticulado", img: "equipamentos/img/flexor-articulado.png" },
        { name: "Flexor Unilateral Articulado", keywords: ["flexor unilateral articulado"], page: "../equipamentos/bravo.html#FlexorUnilateralArticulado", img: "equipamentos/img/flexor-unilateral.png" },
        { name: "Fly Articulado", keywords: ["fly articulado"], page: "../equipamentos/bravo.html#FlyArticulado", img: "equipamentos/img/fly-articulado.png" },
        { name: "Fly em Pé Articulado", keywords: ["fly em pé articulado"], page: "../equipamentos/bravo.html#FlyEmPeArticulado", img: "equipamentos/img/fly-em-pe.png" },
        { name: "Front Pulldown Articulado", keywords: ["front pulldown articulado"], page: "../equipamentos/bravo.html#FrontPulldownArticulado", img: "equipamentos/img/front-pulldown.png" },
        { name: "Hack Squat", keywords: ["hack squat"], page: "../equipamentos/bravo.html#HackSquat", img: "equipamentos/img/hack-squat.png" },
        { name: "Leg Press 45° Articulado", keywords: ["leg press 45 articulado"], page: "../equipamentos/bravo.html#LegPress45Articulado", img: "equipamentos/img/leg-press-45.png" },
        { name: "Leg Press Unilateral Articulado", keywords: ["leg press unilateral articulado"], page: "../equipamentos/bravo.html#LegPressUnilateralArticulado", img: "equipamentos/img/leg-press-unilateral.png" },
        { name: "Leg Press Vertical Articulado", keywords: ["leg press vertical articulado"], page: "../equipamentos/bravo.html#LegPressVerticalArticulado", img: "equipamentos/img/leg-press-vertical.png" },
        { name: "Power Smith Articulado", keywords: ["power smith articulado"], page: "../equipamentos/bravo.html#PowerSmithArticulado", img: "equipamentos/img/power-smith.png" },
        { name: "Power Squat Articulado", keywords: ["power squat articulado"], page: "../equipamentos/bravo.html#PowerSquatArticulado", img: "equipamentos/img/power-squat.png" },
        { name: "Pullover Articulado", keywords: ["pullover articulado"], page: "../equipamentos/bravo.html#PulloverArticulado", img: "equipamentos/img/pullover-articulado.png" },
        { name: "Puxada Circular Articulada", keywords: ["puxada circular articulada"], page: "../equipamentos/bravo.html#PuxadaCircularArticulada", img: "equipamentos/img/puxada-circular.png" },
        { name: "Puxada/Supino Articulada - Dual", keywords: ["puxada supino articulada dual"], page: "../equipamentos/bravo.html#PuxadaSupinoArticuladaDual", img: "equipamentos/img/puxada-supino-dual.png" },
        { name: "Remada Articulada", keywords: ["remada articulada"], page: "../equipamentos/bravo.html#RemadaArticulada", img: "equipamentos/img/remada-articulada.png" },
        { name: "Remada Cavalinho", keywords: ["remada cavalinho"], page: "../equipamentos/bravo.html#RemadaCavalinho", img: "equipamentos/img/remada-cavalinho.png" },
        { name: "Remada Inferior Articulada", keywords: ["remada inferior articulada"], page: "../equipamentos/bravo.html#RemadaInferiorArticulada", img: "equipamentos/img/remada-inferior.png" },
        { name: "Remada Lower Back Articulada", keywords: ["remada lower back articulada"], page: "../equipamentos/bravo.html#RemadaLowerBackArticulada", img: "equipamentos/img/remada-lower-back.png" },
        { name: "Supino Declinado Articulado", keywords: ["supino declinado articulado"], page: "../equipamentos/bravo.html#SupinoDeclinadoArticulado", img: "equipamentos/img/supino-declinado.png" },
        { name: "Supino Reto Articulado", keywords: ["supino reto articulado"], page: "../equipamentos/bravo.html#SupinoRetoArticulado", img: "equipamentos/img/supino-reto.png" },
        { name: "Supino Super Incline Articulado", keywords: ["supino super incline articulado"], page: "../equipamentos/bravo.html#SupinoSuperInclineArticulado", img: "equipamentos/img/supino-super-incline.png" },
        { name: "Supino Wide Chest Articulado", keywords: ["supino wide chest articulado"], page: "../equipamentos/bravo.html#SupinoWideChestArticulado", img: "equipamentos/img/supino-wide-chest.png" },
        { name: "V Squat Articulado", keywords: ["v squat articulado"], page: "../equipamentos/bravo.html#VSquatArticulado", img: "equipamentos/img/v-squat.png" },
        { name: "Wide Pull Down Articulado", keywords: ["wide pull down articulado"], page: "../equipamentos/bravo.html#WidePullDownArticulado", img: "equipamentos/img/wide-pull-down.png" }
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
