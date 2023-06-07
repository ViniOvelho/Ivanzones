<?php

//importa o arquivo de conexão
require_once "../banco/conexao.php";

//cria uma variável com um comando SQL
$SQL = "SELECT * FROM `mensagens` WHERE categoria LIKE ?";

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
}