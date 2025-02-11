<?php
include_once("header.php");
?>
  <!-- INÍCIO -->
  <section id="hero" class="container flex-row">
    <div id="particles-js"></div>
    
    <div class="hero__content">
      <h1 class="title">A excelência nos treinos começam com equipamentos avançados.</h1>
      <p class="text">
        Revolucione sua academia, conheça nossos equipamentos!
      </p>
<!-- Botão "Pesquisa" -->
<div class="search-container"> 
  <input type="text" id="searchInput" placeholder="Nome do Equipamento">
    <ul id="suggestionsList" style="list-style-type: none; padding: 0; margin: 0; display: none;"></ul>
    
    <button onclick="searchMachine()">Pesquisar</button>
  
    <script src="script.js"></script>
  </div>
    </div>
    
    <div class="video-container">
      
      <video width="420" height="360" controls autoplay loop muted onmouseover="this.controls=false" onmouseout="this.controls=false">
      <source src="assets/img/VÍDEO ZEST IHRSA.mp4" alt="video-entrada">
    </video>
    
    </div>
  </section>

  <!-- SOBRE -->
  <section id="" class="container flex-center flex-column" data-aos="fade-up">
    <div class="about__details flex-center" data-aos="">
      <div class="about__details-content">
        <h1>Sobre Nós</h1>
        <section id="about">
        <p>A Zest Fitness nasceu a partir do anseio de unir a paixão pela educação física à conexão mundial.</p>
        <h1> </h1>
        <p>Fundada em 2013, a Zest Fitness surgiu com uma visão clara de transformar o cenário de fitness no Brasil fornecendo soluções inovadoras de equipamentos com excelente biomecânica, desempenho e alta performance. Com conforto e de fácil ajuste, os equipamentos possuem um design que proporciona as academias um visual elegante e harmonioso ao ambiente, contribuindo desta forma, para que nossos clientes alcancem um crescimento sustentável.</p>
        <h1> </h1>
        <p>Ao longo dos anos, expandimos significativamente nossa presença no mercado brasileiro. Atendemos a centenas de academias em todo o país, desde redes até estabelecimentos independentes.</p>
        <h1> </h1>
        <p>A Zest Fitness é sinônimo de qualidade e inovação no setor de fitness.</p>
        <a href="https://api.whatsapp.com/send?phone=555493043447" class="btn btn-primary" target="_blank">Fale conosco e conheça nossos equipamentos!</a>
      </div>
      <div class="about__details-img">
        <br><br><br>
        <img src="assets/img/zestzest.png" alt="">
      </div>
    </div>
  </section>

  <!-- equipamentos -->


  <!-- DEPOIMENTOS -->
  <section id="testimonials">
    <div class="container flex-row">
      <div class="testimonials-wrapper">
        <p class="quotes" data-aos="zoom-in">
          <i class="fas fa-quote-left"></i>
        </p>
        <p class="section-subheading" data-aos="fade-up" data-aos-delay="100">depoimentos</p>
        <div class="testimonials">
          <div class="testimonial" data-aos="fade-up" data-aos-delay="200">
            <h1 class="testimonial__title">
              "Aparelho fantástico!".
            </h1>
            <h2>3D Multi Abductor da GluteBuilder</h2>
            <p class="testimonial__text">
              "Estou muito satisfeito com o aparelho! Ele tem sido amplamente utilizado e está atendendo muito bem às nossas necessidades. A qualidade é excelente, e com certeza vou continuar recomendando para outras academias. Já compartilhei a indicação com alguns amigos e espero que eles entrem em contato em breve. Já fizemos um investimento na abdutora, mas, se surgir uma oportunidade imperdível, ficarei atento. Agradeço pela atenção principalmente do pós-vendas, extremamente atenciosa, o produto é sensacional e não tenho do que reclamar!"
            </p>
            <div class="testimonial__author">
              <h3>Diego Cartarozzi</h3>
              <p>HD CLINICA - Pedreiras/SP</p>
            </div>
          </div>
        </div>
        <div class="testimonial-navigation">
          <span class="active"></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div class="testimonials__img" data-aos="fade-left" data-aos-delay="300">
        <img src="assets/img/depoimento1.png" alt="">
      </div>
    </div>
  </section>


<?php
include_once("footer.php");
?>