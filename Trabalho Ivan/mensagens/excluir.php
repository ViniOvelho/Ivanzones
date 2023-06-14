<<<<<<< HEAD
<?php

   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "DELETE FROM `mensagens` WHERE  `idmensagem`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //volta para a listagem de usuarios
   header("Location: index.php");

   







=======
<?php

   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "DELETE FROM `mensagens` WHERE  `idmensagem`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //volta para a listagem de usuarios
   header("Location: index.php");

   







>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
