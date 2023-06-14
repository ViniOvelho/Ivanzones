<<<<<<< HEAD
<?php
    include_once "../mensagens/consultar_todos.php";
    include_once "../template/cabecalho.php";
    include_once "../template/menu.php"
?>

<!-- Notícias -->
<div class="container mt-4">
<div class="row row-cols-1 row-cols-md-3 g-3">

    <?php foreach($mensagens as $id => $mensagem):    ?>
    
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="../uploads/<?php echo $mensagem->foto; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $mensagem->titulo; ?></h5>
            <a href="ler.php?id=<?php echo $mensagem->idmensagem;?>" class="btn btn-primary">Ler mais</a>
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
=======
<?php
    include_once "../mensagens/consultar_todos.php";
    include_once "../template/cabecalho.php";
    include_once "../template/menu.php"
?>

<!-- Notícias -->
<div class="container mt-4">
<div class="row row-cols-1 row-cols-md-3 g-3">

    <?php foreach($mensagens as $id => $mensagem):    ?>
    
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="../uploads/<?php echo $mensagem->foto; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $mensagem->titulo; ?></h5>
            <a href="ler.php?id=<?php echo $mensagem->idmensagem;?>" class="btn btn-primary">Ler mais</a>
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
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
?>