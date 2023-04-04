<?php
 include_once "dados.php";
 include_once "header.php";
 include_once "menu.php";
?>




<!-- Noticias -->
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-3">
<?php foreach ($noticias as $noticias): ?>
<div class="col">
<div class="card">
<img src="<?php echo $noticias["foto"]; ?>" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><?php echo $noticias["titulo"]; ?></h5>
  <p class="card-text"><?php echo $noticias["chamada"]; ?></p>
  <a href="#" class="btn btn-primary">É isso ai</a>
</div>
</div>
</div>
<?php endforeach; ?>
</div>

</div>

<!-- Fim das Noticias -->
<?php
include_once "rodape.php";
?>