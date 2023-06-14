<<<<<<< HEAD
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT * FROM `mensagens`;";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);

//executa o comando
$comando->execute();

//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();

//pega a primeira linha de resultado da consulta
$mensagens = [];

while ($mensagem = $resultado->fetch_object()) {
    $mensagens[] = $mensagem;
}
=======
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT * FROM `mensagens`;";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);

//executa o comando
$comando->execute();

//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();

//pega a primeira linha de resultado da consulta
$mensagens = [];

while ($mensagem = $resultado->fetch_object()) {
    $mensagens[] = $mensagem;
}
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
