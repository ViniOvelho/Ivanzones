<<<<<<< HEAD
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT * FROM `usuario`;";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);
//executa o comando
$comando->execute();
//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();
//pega a primeira linha de resultado da consulta
$usuarios = [];

while ($usuario = $resultado->fetch_object()) {
    $usuarios[] = $usuario;
=======
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT * FROM `usuario`;";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);
//executa o comando
$comando->execute();
//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();
//pega a primeira linha de resultado da consulta
$usuarios = [];

while ($usuario = $resultado->fetch_object()) {
    $usuarios[] = $usuario;
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
}