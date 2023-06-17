
<?php
   
 
   require_once "../banco/conexao.php";

   $id = $_POST['idmensagem'];
   $titulo = $_POST['titulo'];
   $contexto = $_POST['contexto'];
   $categoria = $_POST['categoria'];

   require_once "faz_upload.php";
   $foto = $nome_foto;


   $SQL = "UPDATE `mensagens` SET `titulo`= ?, `contexto`= ?, `categoria`= ?, foto=? WHERE  `idmensagem`= ? ;";
 
  
   $comando = $conexao->prepare($SQL);

  
   $comando->bind_param("ssssi", $titulo, $contexto, $categoria, $foto, $id);


   $comando->execute();

  
   header("Location: index.php");

   
