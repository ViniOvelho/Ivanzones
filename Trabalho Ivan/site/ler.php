
<?php 

include_once "../template/menu.php";
include_once "../template/cabecalho.php";
include_once "../mensagens/consultar_por_id.php";
?>


<div class="container">
<h1><?php echo $mensagens->titulo; ?></h1>
<hr>
<img src="../uploads/<?php echo $mensagens->foto;?>" class="" />
<p><?php echo $mensagens->contexto;?></p>
</div>

