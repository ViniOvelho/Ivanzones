<<<<<<< HEAD
<?php 
require_once "validar.php";
require_once "../template/cabecalho.php"; 
require_once "../template/menu_restrito.php";?>

<div class="container">
    <h1>Área Restrita</h1>
    <hr>

<?php if(isset($erro_login)): ?>
    
<div class="alert alert-warning alert-dismissible fade show" role="alert">
 <strong> <?php echo $erro_login ?> </strong> You should check in on some of those fields below.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

    <form action="validar.php" method="post" enctype="multipart/form-data">
        

        <label class="form-label">Login</label><br>
        <input class="form-control" type="text" name="login"><br>

        <label class="form-label">Senha</label><br>
        <input class="form-control" type="password" name="senha"><br>

        <button type="submit"  class="btn btn-warning">Entrar</button>    
    </form>
    
</div>

=======
<?php 
require_once "validar.php";
require_once "../template/cabecalho.php"; 
require_once "../template/menu_restrito.php";?>

<div class="container">
    <h1>Área Restrita</h1>
    <hr>

<?php if(isset($erro_login)): ?>
    
<div class="alert alert-warning alert-dismissible fade show" role="alert">
 <strong> <?php echo $erro_login ?> </strong> You should check in on some of those fields below.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

    <form action="validar.php" method="post" enctype="multipart/form-data">
        

        <label class="form-label">Login</label><br>
        <input class="form-control" type="text" name="login"><br>

        <label class="form-label">Senha</label><br>
        <input class="form-control" type="password" name="senha"><br>

        <button type="submit"  class="btn btn-warning">Entrar</button>    
    </form>
    
</div>

>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
<?php require_once "../template/rodape.php"; ?>