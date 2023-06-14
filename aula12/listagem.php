<<<<<<< HEAD
<?php
 include "dados.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

<!-- Carousel -->

  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Img/silly walks.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Img/silly walks (1).jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Img/silly walks (2).jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Final do Carousel -->

<!-- Menu principal -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Final do Menu -->

<!-- Noticias -->
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-3">
    <?php foreach($noticias as $id => $noticia): ?>
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="../uploads/<?php echo $noticia->foto; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $noticia->titulo; ?></h5>
            <a href="ler.php?id=<?php echo $noticia->idnoticia;?>" class="btn btn-primary">Ler mais</a>
        </div>
    </div>
    </div>
    <?php endforeach; ?>
    </div>
</div>
<!-- Fim Notícias -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

<?php
    include_once "../template/rodape.php";
?>
  </body>
</html>
=======
<?php
 include_once "dados.php";
 include_once "header.php";
 include_once "menu.php";
?>




<!-- Noticias -->
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-3">
<?php foreach ($noticias as $id => $noticia): ?>
<div class="col">
<div class="card">
<img src="<?php echo $noticia["foto"]; ?>" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><?php echo $noticia["titulo"]; ?></h5>
  <p class="card-text"><?php echo $noticia["chamada"]; ?></p>
  <a href="ler.php?id=<?php echo $id;?>" class="btn btn-primary">Ler Mais</a>
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
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
