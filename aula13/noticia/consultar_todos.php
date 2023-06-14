<<<<<<< HEAD
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT * FROM `noticia` WHERE categoria LIKE ?";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);

//pega o valor assunto enviado via GET pela URL ou um valor em branco
$assunto = $_GET['assunto'] ?? "";
$assunto = "%$assunto%";

//vincula a variávl $assunto com o param ? no SQL
$comando->bind_param("s", $assunto);

//executa o comando
$comando->execute();

//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();

//pega a primeira linha de resultado da consulta
$noticias = [];

while ($noticia = $resultado->fetch_object()) {
    $noticias[] = $noticia;
=======
<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT * FROM `noticia`;";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);
//executa o comando
$comando->execute();
//pegar os resultados da consulta - todas as linhas de resultado
$resultado = $comando->get_result();
//pega a primeira linha de resultado da consulta
$noticias = [];

while ($noticia = $resultado->fetch_object()) {
    $noticias[] = $noticia;
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
}