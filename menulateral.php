 <!-- Botão para abrir o menu -->
  <button class="open-menu-btn" onclick="toggleMenu()">Carrinho</button>

  <!-- Menu lateral -->
  <div class="side-menu" id="sideMenu">
    <button class="close-menu-btn" onclick="toggleMenu()">Fechar</button>
    <h2>Meu Orçamento</h2>

  

    <form id="budgetForm">
      <label for="name">Nome do Cliente:</label>
      <input type="text" id="name" name="name" placeholder="Digite o nome" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" placeholder="Digite o e-mail" required>

      <label for="phone">Número do Cliente:</label>
      <input type="tel" id="phone" name="phone" placeholder="Digite o número" required>

      <button type="submit" class="submit-btn">Finalizar Orçamento</button>
    </form>
  </div>