<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idmensagem'];
   $titulo = $_POST['titulo'];
   $categoria = $_POST['categoria'];

   require_once "faz_upload.php";
   $foto = $nome_foto;

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `mensagens` SET `titulo`= ?, , `categoria`= ?, foto=? WHERE  `idmensagem`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?, 
   $comando->bind_param("sssi", $titulo, $categoria, $foto, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







