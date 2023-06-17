
<?php

require_once "consultar_por_id.php"; 
require_once "../template/cabecalho.php"; ?>


<div class="container">
    <h1>Cadastro de mensagens</h1>
    <hr>

    <form action=
    "<?php echo  isset($mensagens) ? 
     "atualizar.php" : 
     "inserir.php";
    ?>"
    method="post" enctype="multipart/form-data">

    <input type="hidden" name="idmensagem" value="<?php echo $mensagens->idmensagem ?? "" ;?>"><br>
        
        <label class="form-label">Titulo</label><br>
        <input class="form-control" type="text" name="titulo" value="<?php echo $mensagens->titulo ?? "" ;?>"><br>
        
        <label class="form-label">Contexto</label><br>
        <textarea class="form-control" type="text" name="contexto"><?php echo $mensagens->contexto ?? "" ;?>"</textarea><br>

        <label class="form-label">Categoria</label><br>
        <input class="form-control" type="text" name="categoria"><br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br>

        <button type="submit" class="btn btn-warning">Inserir</button>    
    </form>

</div>

    <?php require_once "../template/rodape.php"; ?>
