document.getElementById("searchInput").addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        searchMachine(); // Chama a função de busca quando a tecla Enter é pressionada
    }
});

function searchMachine() {
    const searchInput = document.getElementById("searchInput").value.toLowerCase();

    // Mapeamento: nome da máquina (ou apelidos) -> página correspondente
    const machinesMap = [
        { keywords: ["3d", "3d multi abductor"], page: "../projetos/glutebuilder.html#3dMultiAbductor" },
        { keywords: ["box", "glutebuilderbox"], page: "../projetos/glutebuilder.html#GlutebuilderBox" },
        { keywords: ["GHD", "ghd"], page: "../equipamentos/boldpro.html#GHD" },
    ];

    // Procura a máquina correspondente
    const machine = machinesMap.find(item =>
        item.keywords.some(keyword => searchInput.includes(keyword))
    );

    if (machine) {
        // Redireciona o usuário para a página correspondente
        window.location.href = machine.page;
    } else {
        alert("Máquina não encontrada. Tente outro nome.");
    }
}



