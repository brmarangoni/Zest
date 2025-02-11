<?php
    session_start();
    $_SESSION["carrinho"][$_GET["item"]][] = $_GET["item"];
    $_SESSION["carrinho"][$_GET["item"]][] = $_GET["linha"];
    $_SESSION["carrinho"][$_GET["item"]][] = $_GET["img"];
    header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
