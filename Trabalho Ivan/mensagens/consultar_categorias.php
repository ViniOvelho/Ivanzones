
<?php


require_once "../banco/conexao.php";


$SQL = "SELECT distinct categoria FROM `mensagens`;";


$comando = $conexao->prepare($SQL);

$comando->execute();

$resultado = $comando->get_result();

$categorias = [];

while ($categoria = $resultado->fetch_object()) {
    $categorias[] = $categoria;

}