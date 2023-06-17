
<?php
   

   require_once "../banco/conexao.php";


   if(isset($_GET['id'])) {
      $id = $_GET['id'];

 
      $SQL = "SELECT * FROM `mensagens` WHERE `idmensagem`= ? ;";
      
      
      $comando = $conexao->prepare($SQL);

     
      $comando->bind_param("i", $id);

     
      $comando->execute();

    
      $resultado = $comando->get_result();

      
      $mensagens = $resultado->fetch_object();

   }