<h2>
<p>
        São utilizados para armazenar
        "atribuir valores a uma variavel"
</p>

<ol>

<li> =  | atribuição simples </li>
<li> += | acumula o novo valor </li>
<li> -= | subtrai o valor da variável </li>
<li> ++ | incrementa 1 ao valor da variável </li>
<li> -- | subtrai 1 do valor da variável </li>
<li> .= | concatena o texto ao valor da variável </li>

</ol>

<strong> Exemplos </strong>
<?php
    $nota = 5; //atribui o valor 5 pra variavel
    echo $nota; // imprime o numero 5

    $nota += 5; // soma + 5 na variável
    echo $nota; // imprime o numero 10

    $nota -= 2; // subtrai + 2 na variável
    echo $nota; // imprime o numero 8

    $nota ++; // incrementa 1 na variável
    echo $nota; // imprime o numero 9

    $nota --; // subtrai 1 na variável
    echo $nota; // imprime o numero 8

    $nome = "Ednaldo";
    $nome .= "Pereira"; //concatena o valor anterior Ednaldo, com 
                        //o novo valor Pereira e armazena na variavel 
                        //nome
    echo $nome; // Imprime o nome completo
?>

