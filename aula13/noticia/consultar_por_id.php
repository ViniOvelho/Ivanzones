<<<<<<< HEAD
<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se foi enviada o param id pela URL
   if(isset($_GET['id'])) {
      $id = $_GET['id'];

      //cria uma variável com um comando SQL
      $SQL = "SELECT * FROM `noticia` WHERE `idnoticia`= ? ;";
      
      //prepara o comando para ser executado no mysql
      $comando = $conexao->prepare($SQL);

      //diz qual valor vai ser colocado no lugar do ?
      $comando->bind_param("i", $id);

      //executa o comando
      $comando->execute();

      //pegar os resultados da consulta - todas as linhas de resultado
      $resultado = $comando->get_result();

      //pega a primeira linha de resultado da consulta
      $noticia = $resultado->fetch_object();
=======
<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se foi enviada o param id pela URL
   if(isset($_GET['id'])) {
      $id = $_GET['id'];

      //cria uma variável com um comando SQL
      $SQL = "SELECT * FROM `noticia` WHERE `idnoticia`= ? ;";
      
      //prepara o comando para ser executado no mysql
      $comando = $conexao->prepare($SQL);

      //diz qual valor vai ser colocado no lugar do ?
      $comando->bind_param("i", $id);

      //executa o comando
      $comando->execute();

      //pegar os resultados da consulta - todas as linhas de resultado
      $resultado = $comando->get_result();

      //pega a primeira linha de resultado da consulta
      $noticia = $resultado->fetch_object();
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
   }