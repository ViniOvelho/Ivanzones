
<?php


require_once "../banco/conexao.php";


$SQL = "SELECT * FROM `mensagens`;";


$comando = $conexao->prepare($SQL);


$comando->execute();


$resultado = $comando->get_result();


$mensagens = [];

while ($mensagem = $resultado->fetch_object()) {
    $mensagens[] = $mensagem;
}

