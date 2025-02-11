<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="fontawesome.min.css" />

  <!--Particulas-->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <!--EmailJS-->
  <script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>

  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="assets/img/logozest.png">

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QQHFFVCG00"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QQHFFVCG00');
</script>

  <title>Zest Fitness</title>
  <meta name="description"
    content="">

</head>

<body>

  <!-- Botão do tema -->
  <button id="color-toggle" class="color-toggle-button">
    <i id="theme-icon" class="fas fa-lightbulb"></i>
  </button>

  <!-- Botão do WhatsApp -->
  <div class="whatsapp-button">
    <a href="https://api.whatsapp.com/send?phone=555493043447" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>

  <!-- Botão "Voltar ao Topo" -->
  <div class="back-to-top" id="backToTop">
    <i class="fas fa-chevron-up"></i>
  </div>


  <!-- HEADER -->
  <header>
    
    <div class="container flex-row">
      <div class="header__logo">
        <a href="index.php">
        <img src="assets/img/logozest.png" alt="Logo Zest Fitness">
      </a>
      </div>
      <nav>
        
        <ul class="header__menu flex-row">
            <li class="dropdown">
                <a href="">Equipamentos</a>
                <ul class="dropdown-content">
                    <li><a href="equip.php?equip=newepic">New Epic</a></li>
                    <li><a href="equip.php?equip=bravo">Bravo</a></li>
                    <li><a href="equip.php?equip=evo">Evo</a></li>
                    <li><a href="equip.php?equip=bold">Bold</a></li>
                    <li><a href="equip.php?equip=boldpro">Bold Pro</a></li>
                    <li><a href="equip.php?equip=cardio">Cardio</a></li>
                </ul>
            </li>
            
            <li><a href="#about">Sobre a Zest</a></li>
            <li><a href="glutebuilder.php">GluteBuilder</a></li>
            <li><a href="#contact">Fale Conosco</a></li>
        </ul>
    </nav>
    
    <div id="widget2" class="center">
      <div class="redes-sociais card">
          <div class="box-social">
              <a href="https://www.instagram.com/zestfitnessequipment/" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-instagram"></i>
              </a>
          </div>
          <div class="box-social">
              <a href="https://www.linkedin.com/in/dayan-lazzaretti-40386849/" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-linkedin-in"></i>
              </a>
          </div>
          <div class="box-social">
              <a href="https://www.facebook.com/zestfitnessequipment/?locale=hi_IN" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-facebook"></i>
              </a>
          </div>
      </div>
  </div>
  
  </header>
</div>
 <!-- Botão para abrir o menu -->
 <button class="open-menu-btn" onclick="toggleMenu()">Abrir Menu</button>

<!-- Menu lateral -->
<div class="side-menu" id="sideMenu">
  <button class="close-menu-btn" onclick="toggleMenu()">Fechar</button>
  <h2>Meu Orçamento</h2>
  <?php 
        session_start();
        if(isset($_SESSION["carrinho"]) && count($_SESSION["carrinho"]) > 0){
            foreach($_SESSION["carrinho"] as $i =>$v){
                ?>
                <li><img class="icon-menu"src="equipamentos/img/<?= $v[2]?>" alt=""><p><?= $i."  - Linha ".$v[1]?></p><a href="removeCarrinho.php?nome=<?= $i;?>&linha=<?= $v[0]?>">X</a></li>
                <?php
            }
        }
    ?>
  <form id="budgetForm" action="finalizaOrcamento.php" method="POST">
    <label for="name">Nome do Cliente:</label>
    <input type="text" id="name" name="name" placeholder="Digite o nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Digite o e-mail" required>

    <label for="phone">Número do Cliente:</label>
    <input type="tel" id="phone" name="phone" placeholder="Digite o número" required>

    <button type="submit" class="submit-btn">Finalizar Orçamento</button>
  </form>
</div>