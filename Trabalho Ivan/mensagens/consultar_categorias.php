<<<<<<< HEAD
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT distinct categoria FROM `mensagens`;";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);
//executa o comando
$comando->execute();
//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();
//pega a primeira linha de resultado da consulta
$categorias = [];

while ($categoria = $resultado->fetch_object()) {
    $categorias[] = $categoria;
=======
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT distinct categoria FROM `mensagens`;";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);
//executa o comando
$comando->execute();
//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();
//pega a primeira linha de resultado da consulta
$categorias = [];

while ($categoria = $resultado->fetch_object()) {
    $categorias[] = $categoria;
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
}