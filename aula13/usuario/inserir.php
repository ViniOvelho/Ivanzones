<?php

//importa o arquivo de conexão
require_once "../conexao.php";

//criar uma variavel com um comando SQL
$SQL = "INSERT INTO `db_catalogo_3infob`.`usuario` (`nome`, `login`, `senha`) VALUES ('Jimmy', 'MatanzaRitual', 'v6');";

//prepara o comando para ser executado no mysql
$comando = $conexao -> prepare($SQL);

//executa o comando
$comando->execute();

?>