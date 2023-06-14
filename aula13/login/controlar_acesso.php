<?php
//iniciar a sessão - deve ser colocada sempre antes de manipular a variavel $_SESSION

session_start();

//verifica se existe uma variavel chamada $_SESSION com a key usuário, essa variavel é criada no arquivo validar.php
//quando o usuário digita o login e a senha corretamente

if(!isset($_SESSION["usuario"])){
    header("Location: ../login/formulario.php");

}