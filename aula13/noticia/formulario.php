<<<<<<< HEAD
<?php
require_once "../login/controlar_acesso.php";
require_once "consultar_por_id.php"; 
require_once "../template/cabecalho.php"; ?>


<div class="container">
    <h1>Cadastro de noticias</h1>
    <hr>

    <form action=
    "<?php echo  isset($noticia) ? 
     "atualizar.php" : 
     "inserir.php";
    ?>"
    method="post" enctype="multipart/form-data">

    <input type="hidden" name="idnoticia" value="<?php echo $noticia->idnoticia ?? "" ;?>"><br>
        
        <label class="form-label">Titulo</label><br>
        <input class="form-control" type="text" name="titulo" value="<?php echo $noticia->titulo ?? "" ;?>"><br>

        <label class="form-label">Materia</label><br>
        <textarea class="form-control" type="text" name="materia"><?php echo $noticia->materia ?? "" ;?>"</textarea><br>

        <label class="form-label">Categoria</label><br>
        <input class="form-control" type="text" name="categoria"><br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br>

        <button type="submit" class="btn btn-warning">Inserir</button>    
    </form>

</div>

=======
<?php
require_once "../login/controlar_acesso.php";
require_once "consultar_por_id.php"; 
require_once "../template/cabecalho.php"; ?>


<div class="container">
    <h1>Cadastro de noticias</h1>
    <hr>

    <form action=
    "<?php echo  isset($noticia) ? 
     "atualizar.php" : 
     "inserir.php";
    ?>"
    method="post" enctype="multipart/form-data">

    <input type="hidden" name="idnoticia" value="<?php echo $noticia->idnoticia ?? "" ;?>"><br>
        
        <label class="form-label">Titulo</label><br>
        <input class="form-control" type="text" name="titulo" value="<?php echo $noticia->titulo ?? "" ;?>"><br>

        <label class="form-label">Materia</label><br>
        <textarea class="form-control" type="text" name="materia"><?php echo $noticia->materia ?? "" ;?>"</textarea><br>

        <label class="form-label">Categoria</label><br>
        <input class="form-control" type="text" name="categoria"><br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br>

        <button type="submit" class="btn btn-warning">Inserir</button>    
    </form>

</div>

>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
    <?php require_once "../template/rodape.php"; ?>