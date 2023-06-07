

<?php

require "consultar_todos.php"; 
require_once "../template/cabecalho.php";
require_once "../template/menu_restrito.php";
?>


    <div class="container">
    <h1>Noticias</h1>
    <hr>
   <div class="text-end">
     <a href="formulario.php" class="btn btn-success">Inserir Novo</a>
   </div>
    <table class="table" id="tabela_dados">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Foto</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($mensagens as $mensagem): ?>
            <tr>
                <td><b><?= $mensagem->titulo?></b></td>
                <td><?= $mensagem->categoria ?></td>
                <td><img src="../uploads/<?= $mensagem->foto ?>" height="25px"></td>
                <td class="text-end" width="25%">
                    <a href="excluir.php?id=<?= $mensagem -> idmensagem ?>" class="btn btn-danger">
                    <i class="fa-solid fa-trash-can"></i>
                    Excluir
                    </a>
                    
                    <a href="formulario.php?id=<?= $mensagem -> idmensagem ?>" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Editar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <?php require_once "../template/rodape.php"; ?>


   