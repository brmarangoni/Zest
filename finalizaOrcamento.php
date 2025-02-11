<?php
session_start();
// Inicialize variáveis com valores padrão
$nome = isset($_POST["name"]) ? $_POST["name"] : 'Nome não informado';
$email = isset($_POST["email"]) ? $_POST["email"] : 'Email não informado';
$numero = isset($_POST["phone"]) ? $_POST["phone"] : 'Número não informado';
$itensCar = isset($_SESSION["carrinho"]) ? $_SESSION["carrinho"] : [];
// Verifique se o carrinho contém itens
if (is_array($itensCar) && !empty($itensCar)) {
    $itens = [];
    foreach ($itensCar as $item) {
            $name = $item[0];
            $linha = $item[1];
            $itens[] = $linha." - ".$name."<br>";
        /*
        if (is_array($item) && count($item) === 2) { 
            // Formata o nome do item combinando o modelo com a descrição retirada do nome do arquivo
            $modelo = htmlspecialchars($item[0]);
            $descricao = htmlspecialchars(pathinfo($item[1], PATHINFO_FILENAME)); // Remove a extensão
            $itens[] = "<li>{$modelo} - {$descricao}</li>";
        } else {
            $itens[] = "<li>Item inválido</li>"; // Tratamento de erro para dados inesperados
        }
            */
    }
    $itens = implode("", $itens);
} else {
    $itens = "Nenhum item no carrinho.";
}

$texto = 
    "Olá, tenho interesse nesses itens e gostaria do orçamento dos mesmos:<br><ul>" . $itens . "</ul><br>
    Nome do cliente: " . htmlspecialchars($nome) . "<br>
    E-mail do cliente: " . htmlspecialchars($email) . "<br>
    Número do cliente: " . htmlspecialchars($numero);

echo $texto;
