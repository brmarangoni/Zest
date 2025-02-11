<?php
session_start();

foreach ($_SESSION["carrinho"] as $i => $val) {
    // Verifica se o nome e a linha coincidem
    if ($_GET["nome"] == $i && $_GET["linha"] == $val[0]) {
        unset($_SESSION["carrinho"][$i]); // Remove o item completamente

        // Opcional: Verifique se ainda existem sub-itens, caso necessário
        if (empty($_SESSION["carrinho"][$i])) {
            unset($_SESSION["carrinho"][$i]); // Remove o índice principal se vazio
        }
    }
}

header(sprintf('Location: %s', $_SERVER['HTTP_REFERER']));
exit;
?>
