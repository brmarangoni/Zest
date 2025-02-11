<?php
    include_once("header.php");
    $equips = [

            "3dMultiAbductor" => [
              "nome" => "3D Multi Abductor",
              "img" => "3d.png",
              "desc" => "A única abdutora 3D do mercado, banco ajustável em 7 ângulos para diferentes execuções do exercício, com mais conforto e estabilidade.",
            ],

            "deadliftElite" => [
              "nome" => "Deadlift Elite",
              "img" => "deadlift.png",
              "desc" => "Plataforma para trabalhar agachamento e búlgaro. Os pegadores se movimentam junto com o punho, mantendo-os alinhados durante todo o movimento. Possui acessórios que transformam os pegadores em barras para mais diversidade de exercícios e também conta com apoio de pés para o búlgaro",
            ],

            "dual45HipExtension" => [
              "nome" => "Dual 45 Hip Extension",
              "img" => "dual-45.png",
              "desc" => "Exercício que ativa os músculos do glúteo de maneira isolada, sem trabalhar lombar. Pode ser feito com as pernas esticadas e possui a plataforma que permite a execução com elas dobradas, criando diferentes possibilidades de estímulos. Pegador com rotação e apoio confortável de quadril",
            ],
            
            "hipThrust" => [
              "nome" => "Hip Thrust",
              "img" => "hip-trhust.png",
              "desc" => "A máquina Hip Thrust é projetada para realizar o exercício de elevação de quadril, focando no fortalecimento dos glúteos, quadríceps e músculos posteriores da coxa. Ao contrário da versão tradicional com barra, essa máquina oferece mais conforto e segurança, pois possui apoio para a lombar, ajuste de carga e uma execução guiada do movimento.",
            ],
            
            "kneelingGluteIsolator" => [
              "nome" => "Kneelin Glute Isolator",
              "img" => "kelleing.png",
              "desc" => "Com 11 diferentes posições de execução, esse aparelho permite uma mecânica não encontrada em outros exercícios, trabalhando de forma isolada sem nenhuma ativação de quadríceps ou posterior.",
            ],
            
            "pendulumKickBack" => [
              "nome" => "Pendulum Kick Back",
              "img" => "pendulum.png",
              "desc" => "Permite um trajeto de movimento que trabalha o músculo durante toda a execução, sem ativar quadril e com suporte que permite a maior estabilidade do peito, coxas e lombar.",
            ],
            
            "glutebuilderV2" => [
              "nome" => "Glutebuilder V2",
              "img" => "V2.png",
              "desc" => "Uma alternativa segura e prática para realizar elevação pélvica e outros diversos exercícios de glúteos ou até de superiores. Pode armazenar anilhas e barras olímpicas, tornando a execução dos exercícios mais rápida.",
            ],
            
            "glutebuilderBox" => [
              "nome" => "Glutebuilder Box",
              "img" => "box.png",
              "desc" => "A NEW GLUTEBUILDER BOX é uma revolucionária caixa híbrida de treino patenteada, feita de madeira de alta resistência e coberta por espuma de alta densidade, projetada para realizar mais de 30 exercícios de glúteos de forma eficaz, confortável e segura.",
            ],
          ];
  ?>

  <!-- GluteBuilder -->
    <div class="container">
      <br><br><br><br><br><br><br><br>
      <h5 class="section-subheading" data-aos="fade-up">GluteBuilder</h5>
      <section id="projects">
      <h2 class="section-heading" data-aos="fade-up" data-aos-delay="100">
        Descubra a inovação autêntica em equipamentos para glúteos
      </h2>
    
      <?php
// Certifique-se de que $linha está definido antes do loop, ou remova-o se não for necessário.
$linha = isset($linha) ? $linha : 'Glutebuilder'; // Substitua "Linha padrão" conforme necessário.

foreach ($equips as $equip => $v) {
?>  
    <!-- Projeto -->
    <div class="project">
        <div id="<?= $equip ?>" class="machine" data-name="<?= $v["nome"] ?>" data-aos="fade-up" data-aos-delay="100">
            <img src="projetos/img/<?= $v["img"] ?>" alt="<?= $v["nome"] ?>">
        </div>
        <div class="project__content" data-aos="fade-up" data-aos-delay="120">
            <h3 class="project__title"><?= $v["nome"] ?></h3>
            <p class="project__text">
                <?= $v["desc"] ?>
            </p>
            <!-- Ajuste para usar as variáveis corretas -->
            <a href="addcar.php?item=<?= urlencode($v["nome"]); ?>&linha=<?= urlencode($linha); ?>&img=<?= urlencode($v["img"]); ?>" class="add-to-cart-btn">Adicionar ao Orçamento</a>
        </div>
    </div>
<?php
}
?>



      </div>
    </div>
  </section>

  <?php
    include_once("footer.php");
?>