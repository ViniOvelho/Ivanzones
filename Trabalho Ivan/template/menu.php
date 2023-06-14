<?php require "../mensagens/consultar_categorias.php"; ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MENU USUÁRIOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

<?php foreach ($categorias as $msn): ?>

      

        <?php endforeach; ?>

        <li class="nav-item">
          <a class="nav-link"
           href="../mensagens/index.php">
          Adicionar Mensagem
          </a>
        </li>

      
    </div>
  </div>
</nav>
