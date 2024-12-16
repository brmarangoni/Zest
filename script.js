function searchMachine() {
    const searchInput = document.getElementById("searchInput").value.toLowerCase();

    // Mapeamento: nome da máquina (ou apelidos) -> página correspondente
    const machinesMap = [
        { keywords: ["3d", "3d multi abductor"], page: "../projetos/glutebuilder.html#3dMultiAbductor" },
        { keywords: ["box", "glutebuilderbox"], page: "../projetos/glutebuilder.html#GlutebuilderBox" },
        { keywords: ["leg", "leg press"], page: "leg-press.html#leg-press" },
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



