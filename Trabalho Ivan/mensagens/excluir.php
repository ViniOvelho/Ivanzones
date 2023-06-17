
<?php


   require_once "../banco/conexao.php";

   $id = $_GET['id'];


   $SQL = "DELETE FROM `mensagens` WHERE  `idmensagem`= ? ;";
 

   $comando = $conexao->prepare($SQL);

 
   $comando->bind_param("i", $id);


   $comando->execute();

   header("Location: index.php");

   




