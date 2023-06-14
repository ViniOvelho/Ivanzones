<<<<<<< HEAD
<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "db_catalogo_3infob";
$port = 3306;

//cria uma conexão com o mysql
$conexao = new mysqli($host, 
                      $user, 
                      $password,
                      $database,
                      $port);

//verifica se existe erros na conexão                      
if($conexao->connect_error){
    echo $conexao->connect_error;
    die();
}

=======
<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "db_catalogo_3infob";
$port = 3306;

//cria uma conexão com o mysql
$conexao = new mysqli($host, 
                      $user, 
                      $password,
                      $database,
                      $port);

//verifica se existe erros na conexão                      
if($conexao->connect_error){
    echo $conexao->connect_error;
    die();
}

>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
