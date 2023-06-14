<<<<<<< HEAD

<?php
//se existe, ou foi enviada, a variável usuário
if (isset($_POST["usuario"])){

//verifica se o usuario é igual a admn e a senha igual a 40028922
if($_POST["usuario"] == 'Yudi Tamashiro' && $_POST ["senha"] == '40028922'){
    echo "ta certo meu querido";
}else{
    echo "Errou!!!!!!!!!!!!!!!!";
     }
     
    }else{
        //manda abrir outro arquivo, o formulário de login
        //caso o usuário tente abrir esse arquivo pela URL
        //sem acessar o formulário de login "redirecionamento"

        header("Location: form_login.php");
    }
    ?>
=======

<?php
//se existe, ou foi enviada, a variável usuário
if (isset($_POST["usuario"])){

//verifica se o usuario é igual a admn e a senha igual a 40028922
if($_POST["usuario"] == 'Yudi Tamashiro' && $_POST ["senha"] == '40028922'){
    echo "ta certo meu querido";
}else{
    echo "Errou!!!!!!!!!!!!!!!!";
     }
     
    }else{
        //manda abrir outro arquivo, o formulário de login
        //caso o usuário tente abrir esse arquivo pela URL
        //sem acessar o formulário de login "redirecionamento"

        header("Location: form_login.php");
    }
    ?>
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
    