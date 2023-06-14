<<<<<<< HEAD
<?php 

include_once "../template/menu.php";
include_once "../template/cabecalho.php";
include_once "../noticia/consultar_por_id.php";
?>


<div class="container">
<h1><?php echo $noticia->titulo; ?></h1>
<hr>
<img src="../uploads/<?php echo $noticia->foto;?>" class="" />
<p><?php echo $noticia->materia;?></p>
</div>

=======
<?php 

include_once "../template/menu.php";
include_once "../template/cabecalho.php";
include_once "../noticia/consultar_por_id.php";
?>


<div class="container">
<h1><?php echo $noticia->titulo; ?></h1>
<hr>
<img src="../uploads/<?php echo $noticia->foto;?>" class="" />
<p><?php echo $noticia->materia;?></p>
</div>

>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
<?php include_once "../template/rodape.php"?>