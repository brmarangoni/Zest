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
        //GluteBuilder
        { name: "3D Multi Abductor", keywords: ["3d", "3d multi abductor"], page: "glutebuilder.php#3dMultiAbductor", img: "projetos/img/3d.png" },
        { name: "Deadlift Elite", keywords: ["deadlift", "deadlift elite"], page: "glutebuilder.php#deadliftElite", img: "projetos/img/deadlift.png" },
        { name: "Dual 45 Hip Extension", keywords: ["dualhip", "dual 45 hip extension"], page: "glutebuilder.php#dual45HipExtension", img: "projetos/img/dual-45.png" },
        { name: "Hip Thrust", keywords: ["hipthrust", "hip thrust"], page: "glutebuilder.php#hipThrust", img: "projetos/img/hip-trhust.png" },
        { name: "Kneeling Glute Isolator", keywords: ["kneelingglute", "kneeling glute isolator"], page: "glutebuilder.php#kneelingGluteIsolator", img: "projetos/img/kelleing.png" },
        { name: "Pendulum Kick Back", keywords: ["pendulum", "pendulum kick back"], page: "glutebuilder.php#pendulumKickBack", img: "projetos/img/pendulum.png" },
        { name: "Glutebuilder V2", keywords: ["glutebuilderv2", "glutebuilder v2"], page: "glutebuilder.php#glutebuilderV2", img: "projetos/img/v2.png" },
        { name: "Glutebuilder Box", keywords: ["box", "glutebuilderbox"], page: "glutebuilder.php#glutebuilderBox", img: "projetos/img/box.png" },
        
        // NewEpic

        { name: "Scott", keywords: ["scott"], page: "equip.php?equip=newepic#scott", img: "equipamentos/img/scott.png" },
        { name: "Supino/Desenvolvimento Dual", keywords: ["supino desenvolvimento dual"], page: "equip.php?equip=newepic#supinoDesenvolvimentoDual", img: "equipamentos/img/supino-e-desenvolvimennot.png" },
        { name: "Abdominal", keywords: ["abdominal"], page: "equip.php?equip=newepic#abdominal", img: "equipamentos/img/abdominal.png" },
        { name: "Abdutor/Adutor Dual", keywords: ["abdutor adutor dual"], page: "equip.php?equip=newepic#abdutorAdutorDual", img: "equipamentos/img/adutor-e-abdutor.png" },
        { name: "Desenvolvimento", keywords: ["desenvolvimento"], page: "equip.php?equip=newepic#desenvolvimento", img: "equipamentos/img/desenvolvimento.png" },
        { name: "Extensor", keywords: ["extensor"], page: "equip.php?equip=newepic#extensor", img: "equipamentos/img/extensor.png" },
        { name: "Flexor Deitado", keywords: ["flexor deitado"], page: "equip.php?equip=newepic#flexorDeitado", img: "equipamentos/img/flexor-deitado.png" },
        { name: "Flexor Sentado", keywords: ["flexor sentado"], page: "equip.php?equip=newepic#flexorSentado", img: "equipamentos/img/flexora-sentada.png" },
        { name: "Glúteo", keywords: ["gluteo"], page: "equip.php?equip=newepic#gluteo", img: "equipamentos/img/glúteo.png" },
        { name: "Graviton", keywords: ["graviton"], page: "equip.php?equip=newepic#graviton", img: "equipamentos/img/graviton.png" },
        { name: "Leg Press Horizontal", keywords: ["leg press horizontal"], page: "equip.php?equip=newepic#legPressHorizontal", img: "equipamentos/img/leg-press-horizontal.png" },
        { name: "Lombar", keywords: ["lombar"], page: "equip.php?equip=newepic#lombar", img: "equipamentos/img/lombar.png" },
        { name: "Panturrilha", keywords: ["panturrilha"], page: "equip.php?equip=newepic#panturrilha", img: "equipamentos/img/panturrilha.png" },
        { name: "Peck Deck/Dorsal Dual", keywords: ["peck deck dorsal dual"], page: "equip.php?equip=newepic#peckDeckDorsalDual", img: "equipamentos/img/peck-deck-dorsal.png" },
        { name: "Pull Down", keywords: ["pull down"], page: "equip.php?equip=newepic#pullDown", img: "equipamentos/img/pull-down.png" },
        { name: "Pulley", keywords: ["pulley"], page: "equip.php?equip=newepic#pulley", img: "equipamentos/img/pulley.png" },
        { name: "Pulley/Remada Dual", keywords: ["pulley remada dual"], page: "equip.php?equip=newepic#pulleyRemadaDual", img: "equipamentos/img/pulley e remada.png" },
        { name: "Remada", keywords: ["remada"], page: "equip.php?equip=newepic#remada", img: "equipamentos/img/remada.png" },
        { name: "Remada Baixa", keywords: ["remada baixa"], page: "equip.php?equip=newepic#remadaBaixa", img: "equipamentos/img/remada-baixa.png" },
        { name: "Supino", keywords: ["supino"], page: "equip.php?equip=newepic#supino", img: "equipamentos/img/supinoo.png" },
        { name: "Tríceps Francês", keywords: ["triceps frances"], page: "equip.php?equip=newepic#tricepsFrances", img: "equipamentos/img/tríceps-frances.png" },
        { name: "Tríceps Pressão", keywords: ["triceps pressao"], page: "equip.php?equip=newepic#tricepsPressao", img: "equipamentos/img/tríceps.png" },
        { name: "Voador", keywords: ["voador"], page: "equip.php?equip=newepic#voador", img: "equipamentos/img/voador.png" },
        
        // Bravo
        { name: "Abdominal Crunch", keywords: ["abdominal crunch"], page: "equip.php?equip=bravo#abdominalCrunch", img: "equipamentos/img/abdominal crunch.png" },
        { name: "Abdutor Articulado", keywords: ["abdutor articulado"], page: "equip.php?equip=bravo#abdutorArticulado", img: "equipamentos/img/abdutor articulado.png" },
        { name: "Abdutor em Pé Articulado", keywords: ["abdutor em pé articulado"], page: "equip.php?equip=bravo#abdutorEmPeArticulado", img: "equipamentos/img/abdutor-em-pé.png" },
        { name: "Agachamento Pêndulo Articulado", keywords: ["agachamento pêndulo articulado"], page: "equip.php?equip=bravo#agachamentoPenduloArticulado", img: "equipamentos/img/agachamento-pendulo.png" },
        { name: "Banco Supino Reto Articulado", keywords: ["banco supino reto articulado"], page: "equip.php?equip=bravo#bancoSupinoRetoArticulado", img: "equipamentos/img/banco-supino-reto.png" },
        { name: "Belt Squat", keywords: ["belt squat"], page: "equip.php?equip=bravo#beltSquat", img: "equipamentos/img/belt-squat.png" },
        { name: "Bíceps Articulado", keywords: ["bíceps articulado"], page: "equip.php?equip=bravo#bícepsArticulado", img: "equipamentos/img/bíceps-articulado.png" },
        { name: "Desenvolvimento Articulado", keywords: ["desenvolvimento articulado"], page: "equip.php?equip=bravo#desenvolvimentoArticulado", img: "equipamentos/img/desenvolvimento articulado.png" },
        { name: "Elevação Lateral Articulada", keywords: ["elevação lateral articulada"], page: "equip.php?equip=bravo#elevaçãoLateralArticulada", img: "equipamentos/img/elevação-lateral.png" },
        { name: "Elevação Lateral em Pé Articulada", keywords: ["elevação lateral em pé articulada"], page: "equip.php?equip=bravo#elevaçãoLateralEmPéArticulada", img: "equipamentos/img/elevação-lateral-articulada.png" },
        { name: "Elevação Pélvica Articulada", keywords: ["elevação pélvica articulada"], page: "equip.php?equip=bravo#elevaçãoPélvicaArticulada", img: "equipamentos/img/elevação-pélvica.png" },
        { name: "Extensor Articulado", keywords: ["extensor articulado"], page: "equip.php?equip=bravo#extensorArticulado", img: "equipamentos/img/extensor-articulado.png" },
        { name: "Extensor Unilateral Articulado", keywords: ["extensor unilateral articulado"], page: "equip.php?equip=bravo#extensorUnilateralArticulado", img: "equipamentos/img/extensor-unilateral.png" },
        { name: "Flexor Unilateral Articulado", keywords: ["flexor unilateral articulado"], page: "equip.php?equip=bravo#flexorUnilateralArticulado", img: "equipamentos/img/flexor-em-pé-unilateral.png" },
        { name: "Fly Articulado", keywords: ["fly articulado"], page: "equip.php?equip=bravo#flyArticulado", img: "equipamentos/img/fly-articulado.png" },
        { name: "Fly em Pé Articulado", keywords: ["fly em pé articulado"], page: "equip.php?equip=bravo#flyEmPéArticulado", img: "equipamentos/img/fly-em-pé-articulado.png" },
        { name: "Hack Squat", keywords: ["hack squat"], page: "equip.php?equip=bravo#hackSquat", img: "equipamentos/img/hack-squat.png" },
        { name: "Leg Press 45°", keywords: ["leg press 45"], page: "equip.php?equip=bravo#legPress45", img: "equipamentos/img/leg-press-45.png" },
        { name: "Leg Press Unilateral Articulado", keywords: ["leg press unilateral articulado"], page: "equip.php?equip=bravo#legPressUnilateralArticulado", img: "equipamentos/img/leg-press-unilateral-articulado.png" },
        { name: "Leg Press Vertical", keywords: ["leg press vertical"], page: "equip.php?equip=bravo#legPressVertical", img: "equipamentos/img/leg-press-vertical.png" },
        { name: "Power Smith Articulado", keywords: ["power smith articulado"], page: "equip.php?equip=bravo#powerSmithArticulado", img: "equipamentos/img/power-smith.png" },
        { name: "Power Squat", keywords: ["power squat"], page: "equip.php?equip=bravo#powerSquat", img: "equipamentos/img/power-squat.png" },
        { name: "Puxada Circular Articulada", keywords: ["puxada circular articulada"], page: "equip.php?equip=bravo#puxadaCircularArticulada", img: "equipamentos/img/puaxada-circular-articualda.png" },
        { name: "Puxada/Supino Articulado - Dual", keywords: ["puxada supino articulado dual"], page: "equip.php?equip=bravo#puxadaSupinoArticuladoDual", img: "equipamentos/img/puxada-supino-articulado-dual.png" },
        { name: "Remada Articulada", keywords: ["remada articulada"], page: "equip.php?equip=bravo#remadaArticulada", img: "equipamentos/img/remada-articulada.png" },
        { name: "Remada Cavalinho", keywords: ["remada cavalinho"], page: "equip.php?equip=bravo#remadaCavalinho", img: "equipamentos/img/remada-cavalinho.png" },
        { name: "Remada Inferior Articulada", keywords: ["remada inferior articulada"], page: "equip.php?equip=bravo#remadaInferiorArticulada", img: "equipamentos/img/remada-inferior.png" },
        { name: "Remada Lower Back Articulada", keywords: ["remada lower back articulada"], page: "equip.php?equip=bravo#remadaLowerBackArticulada", img: "equipamentos/img/remada-lower-back.png" },
        { name: "Supino Declinado Articulado", keywords: ["supino declinado articulado"], page: "equip.php?equip=bravo#supinoDeclinadoArticulado", img: "equipamentos/img/supino-declinado.png" },
        { name: "Supino Reto Articulado", keywords: ["supino reto articulado"], page: "equip.php?equip=bravo#supinoRetoArticulado", img: "equipamentos/img/supino-reto-articulado.png" },
        { name: "Supino Wide Chest Articulado", keywords: ["supino wide chest articulado"], page: "equip.php?equip=bravo#supinoWideChestArticulado", img: "equipamentos/img/supino-wide-chest-articulado.png" },
        { name: "V-Squat", keywords: ["vsquat", "v-squat"], page: "equip.php?equip=bravo#vSquat", img: "equipamentos/img/v-squat.png" },
        { name: "Wide Pull Down Articulado", keywords: ["wide pull down articulado"], page: "equip.php?equip=bravo#widePullDownArticulado", img: "equipamentos/img/wide-pull-down-articulado.png" },
        
        //Evo
        { name: "Bíceps Articulado", keywords: ["bíceps", "articulado", "braços"], page: "equip.php?equip=evo#bicepsArticulado", img: "equipamentos/img/bíceps-articulado-evo.png" },
        { name: "Desenvolvimento Articulado", keywords: ["desenvolvimento", "articulado", "ombros"], page: "equip.php?equip=evo#desenvolvimentoArticulado", img: "equipamentos/img/desenvolvimento-articulado-evo.png" },
        { name: "Extensor Articulado", keywords: ["extensor", "articulado", "pernas"], page: "equip.php?equip=evo#extensorArticulado", img: "equipamentos/img/extensor-articulado-evo.png" },
        { name: "Flexor Unilateral Articulado", keywords: ["flexor", "unilateral", "articulado", "pernas"], page: "equip.php?equip=evo#flexorUnilateralArticulado", img: "equipamentos/img/flexor-unilateral-articulado.png" },
        { name: "Glúteo Articulado", keywords: ["glúteo", "articulado", "pernas"], page: "equip.php?equip=evo#gluteoArticulado", img: "equipamentos/img/glúteo_articulado.png" },
        { name: "Hack Articulado", keywords: ["hack", "articulado", "pernas"], page: "equip.php?equip=evo#hackArticulado", img: "equipamentos/img/hack-articulado.png" },
        { name: "Leg Press Articulado", keywords: ["leg press", "articulado", "pernas"], page: "equip.php?equip=evo#legPressArticulado", img: "equipamentos/img/leg-press-articulado-evo.png" },
        { name: "Remada Articulada", keywords: ["remada", "articulada", "costas"], page: "equip.php?equip=evo#remadaArticulada", img: "equipamentos/img/remada-articulada-evo.png" },
        { name: "Remada Inferior Articulada", keywords: ["remada inferior", "articulada", "costas"], page: "equip.php?equip=evo#remadaInferiorArticulada", img: "equipamentos/img/remada-inferior (1).png" },
        { name: "Supino Declinado Articulado", keywords: ["supino", "declinado", "articulado", "peitoral"], page: "equip.php?equip=evo#supinoDeclinadoArticulado", img: "equipamentos/img/supino_declinado-articulado.png" },
        { name: "Supino Reto Articulado", keywords: ["supino", "reto", "articulado", "peitoral"], page: "equip.php?equip=evo#supinoRetoArticulado", img: "equipamentos/img/supino-reto-articulado-evo.png" },
        { name: "Tríceps Pressão Articulado", keywords: ["tríceps", "pressão", "articulado", "braços"], page: "equip.php?equip=evo#tricepsPressaoArticulado", img: "equipamentos/img/triceps-pressao-articulado.png" },

        //Bold
        { name: "Banco Supino Reto", keywords: ["supino", "reto", "peitoral"], page: "equip.php?equip=bold#bancoSupinoReto", img: "equipamentos/img/supino-reto.png" },
        { name: "Banco Supino Inclinado", keywords: ["supino", "inclinado", "peitoral"], page: "equip.php?equip=bold#bancoSupinoInclinado", img: "equipamentos/img/supino-inclinado.png" },
        { name: "Banco Supino Declinado", keywords: ["supino", "declinado", "peitoral"], page: "equip.php?equip=bold#bancoSupinoDeclinado", img: "equipamentos/img/supino-declinado (1).png" },
        { name: "Multi Flight", keywords: ["multi", "flight", "versatilidade"], page: "equip.php?equip=bold#multiFlight", img: "equipamentos/img/mult-flight.png" },
        { name: "Panturrilha Sentada", keywords: ["panturrilha", "sentada", "sóleo"], page: "equip.php?equip=bold#panturrilhaSentada", img: "equipamentos/img/panturrilha-sentada.png" },
        { name: "Leg Press 45º", keywords: ["leg", "press", "quadríceps"], page: "equip.php?equip=bold#legPress45", img: "equipamentos/img/leg-press-45-bold.png" },
        { name: "CrossOver Angular", keywords: ["crossover", "angular", "amplitude"], page: "equip.php?equip=bold#crossOverAngular", img: "equipamentos/img/cross-angular-2.png" },
        { name: "CrossOver", keywords: ["crossover", "peitoral", "versatilidade"], page: "equip.php?equip=bold#crossOver", img: "equipamentos/img/crossover.png" },
        { name: "Polia Simples", keywords: ["polia", "simples", "versatilidade"], page: "equip.php?equip=bold#poliaSimples", img: "equipamentos/img/polia-simples.png" },
        { name: "CrossOver Smith", keywords: ["crossover", "smith", "versatilidade"], page: "equip.php?equip=bold#crossOverSmith", img: "equipamentos/img/cross-smith.png" },
        { name: "Gaiola Agachamento", keywords: ["gaiola", "agachamento", "segurança"], page: "equip.php?equip=bold#gaiolaAgachamento", img: "equipamentos/img/gaiola-agachamento.png" },
        { name: "Banco Scott", keywords: ["banco", "scott", "bíceps"], page: "equip.php?equip=bold#bancoScott", img: "equipamentos/img/banco-scott.png" },
        { name: "Paralela", keywords: ["paralela", "tríceps", "peitoral"], page: "equip.php?equip=bold#paralela", img: "equipamentos/img/paralela.png" },
        { name: "Banco Lombar", keywords: ["banco", "lombar", "core"], page: "equip.php?equip=bold#bancoLombar", img: "equipamentos/img/banco-lombar.png" },
        { name: "Banco Reto", keywords: ["banco", "reto", "peso livre"], page: "equip.php?equip=bold#bancoReto", img: "equipamentos/img/banco-reto.png" },
        { name: "Banco 90º", keywords: ["banco", "90", "inclinado"], page: "equip.php?equip=bold#banco90", img: "equipamentos/img/banco-90n.png" },
        { name: "Banco Ajustável", keywords: ["banco", "ajustável", "versatilidade"], page: "equip.php?equip=bold#bancoAjustavel", img: "equipamentos/img/banco-ajustável.png" },
        { name: "Prancha Abdominal", keywords: ["prancha", "abdominal", "core"], page: "equip.php?equip=bold#pranchaAbdominal", img: "equipamentos/img/prancha-abdominal.png" },
        { name: "Banco Abdominal Trainer", keywords: ["abdominal", "trainer", "abdômen"], page: "equip.php?equip=bold#bancoAbdominalTrainer", img: "equipamentos/img/abdominal-trainer.png" },
        { name: "T-Bar", keywords: ["t-bar", "remada", "costas"], page: "equip.php?equip=bold#tBar", img: "equipamentos/img/t-bar.png" },
        { name: "Elevação Pélvica", keywords: ["elevação", "pélvica", "glúteos"], page: "equip.php?equip=bold#elevacaoPelvica", img: "equipamentos/img/elevacao-pelvaica.png" },
        { name: "Banco de Alongamentos", keywords: ["banco", "alongamentos", "mobilidade"], page: "equip.php?equip=bold#bancoDeAlongamentos", img: "equipamentos/img/banco-alongamentos.png" },
        { name: "Suporte Barras", keywords: ["suporte", "barras", "organização"], page: "equip.php?equip=bold#suporteBarras", img: "equipamentos/img/suporte-barras.png" },

        //BoldPro
        { name: "Banco Supino Reto", keywords: ["supino", "reto", "peitoral"], page: "equip.php?equip=boldpro#bancoSupinoReto", img: "equipamentos/img/banco-supino-rero-pro.png" },
        { name: "Banco Supino Inclinado", keywords: ["supino", "inclinado", "peitoral superior"], page: "equip.php?equip=boldpro#bancoSupinoInclinado", img: "equipamentos/img/banco-supino-inclinado-pro.png" },
        { name: "Banco Supino Declinado", keywords: ["supino", "declinado", "peitoral inferior"], page: "equip.php?equip=boldpro#bancoSupinoDeclinado", img: "equipamentos/img/banco-supino-declinado-pro.png" },
        { name: "Banco Desenvolvimento", keywords: ["desenvolvimento", "ombros", "tríceps"], page: "equip.php?equip=boldpro#bancoDesenvolvimento", img: "equipamentos/img/banco-desenvolvimento-pro.png" },
        { name: "Panturrilha Sentada", keywords: ["panturrilha", "sóleo", "inferiores"], page: "equip.php?equip=boldpro#panturrilhaSentada", img: "equipamentos/img/panturrilha-sentada-pro.png" },
        { name: "Leg Press 45º", keywords: ["leg press", "quadríceps", "inferiores"], page: "equip.php?equip=boldpro#legPress45", img: "equipamentos/img/Leg-press-45-pro.png" },
        { name: "Super Squat", keywords: ["super squat", "coxa", "glúteos"], page: "equip.php?equip=boldpro#superSquat", img: "equipamentos/img/Super-Squat.png" },
        { name: "Hack Squat", keywords: ["hack squat", "coxa", "glúteos"], page: "equip.php?equip=boldpro#hackSquat", img: "equipamentos/img/hack.png" },
        { name: "Smith", keywords: ["smith", "supino", "agachamento"], page: "equip.php?equip=boldpro#smith", img: "equipamentos/img/smith.png" },
        { name: "Gaiola Agachamento", keywords: ["gaiola", "agachamento", "terra"], page: "equip.php?equip=boldpro#gaiolaAgachamento", img: "equipamentos/img/gaiola-agachametno.png" },
        { name: "Elevação Pélvica", keywords: ["elevação", "glúteos", "quadril"], page: "equip.php?equip=boldpro#elevacaoPelvica", img: "equipamentos/img/elevação-pélvica-pro.png" },
        { name: "CrossOver Angular", keywords: ["crossover", "angular", "superiores"], page: "equip.php?equip=boldpro#crossOverAngular", img: "equipamentos/img/crossover-angular.png" },
        { name: "CrossOver", keywords: ["crossover", "múltiplos grupos", "funcional"], page: "equip.php?equip=boldpro#crossover", img: "equipamentos/img/crossover-pro.png" },
        { name: "CrossSmith", keywords: ["crosssmith", "multifunção", "superiores"], page: "equip.php?equip=boldpro#crossSmith", img: "equipamentos/img/cross-smith-pro.png" },
        { name: "Smith com Guia Dupla", keywords: ["smith", "guia dupla", "funcional"], page: "equip.php?equip=boldpro#smithComGuiaDupla", img: "equipamentos/img/smith guia dupla.png" },
        { name: "Banco Scott", keywords: ["banco scott", "bíceps", "isolamento"], page: "equip.php?equip=boldpro#bancoScott", img: "equipamentos/img/banco-scott-pro.png" },
        { name: "Paralela", keywords: ["paralela", "dips", "tríceps"], page: "equip.php?equip=boldpro#paralela", img: "equipamentos/img/paralela-pro.png" },
        { name: "Banco Lombar", keywords: ["banco lombar", "core", "postura"], page: "equip.php?equip=boldpro#bancoLombar", img: "equipamentos/img/banco-lombar-pro.png" },
        { name: "Banco Reto", keywords: ["banco reto", "peso livre", "simples"], page: "equip.php?equip=boldpro#bancoReto", img: "equipamentos/img/banco-reto-pro.png" },
        { name: "Banco 90ª", keywords: ["banco 90", "supino inclinado", "ombros"], page: "equip.php?equip=boldpro#banco90", img: "equipamentos/img/banco-90-pro.png" },
        { name: "Banco Ajustável", keywords: ["banco ajustável", "peso livre", "flexível"], page: "equip.php?equip=boldpro#bancoAjustavel", img: "equipamentos/img/banco-ajustável.png" },
        { name: "Prancha Abdominal Ajustável", keywords: ["prancha abdominal", "ajustável", "core"], page: "equip.php?equip=boldpro#pranchaAbdominalAjustavel", img: "equipamentos/img/prancha-abdominal-ajustável.png" },
        { name: "Agachamento Sissy", keywords: ["agachamento", "sissy", "glúteos"], page: "equip.php?equip=boldpro#agachamentoSissy", img: "equipamentos/img/sissy--].png" },
        { name: "GHD", keywords: ["ghd", "glúteos", "lombar"], page: "equip.php?equip=boldpro#ghd", img: "equipamentos/img/ghd.png" },
        { name: "Suporte de Dumbells 15 Pares", keywords: ["suporte", "dumbells", "organização"], page: "equip.php?equip=boldpro#suporteDeDumbells15Pares", img: "equipamentos/img/suporte-15-pares-dumbbells.png" },
        { name: "Suporte de Dumbells 10 Pares", keywords: ["suporte", "dumbells", "organização"], page: "equip.php?equip=boldpro#suporteDeDumbells10Pares", img: "equipamentos/img/suporte-10-pares-dumbbelss.png" },
        { name: "Suporte de Barras", keywords: ["suporte", "barras", "organização"], page: "equip.php?equip=boldpro#suporteDeBarras", img: "equipamentos/img/suporte-barras-pro.png" },
        { name: "Suporte de Anilhas", keywords: ["suporte", "anilhas", "organização"], page: "equip.php?equip=boldpro#suporteDeAnilhas", img: "equipamentos/img/suporte-para-anilha-pro.png" },
        { name: "Banco de Alongamentos", keywords: ["banco", "alongamentos", "prático"], page: "equip.php?equip=boldpro#bancoDeAlongamentos", img: "equipamentos/img/banco-alongamentos-pro.png" },
        { name: "Barra H", keywords: ["barra h", "remadas", "puxadas"], page: "equip.php?equip=boldpro#barraH", img: "equipamentos/img/barra-H.png" },
        
        //Cardio

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

