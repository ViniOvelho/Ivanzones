<h2>Array - vetor</h2>

<p>
Vetores são estruturas de dados unidimensionais 
"variáveis compostas", que permitem o armazenamentos
de mais de um valor. Para acessar os valores 
armazenados em um Vetor é necessário informar o índice (key)
</p>

<strong> Aparênica de um vetor</strong>
<pre>
     +---------+
    0|maça     |
     +---------+
    1|uva      |
     +---------+
    2|pera     |
     +---------+
    3|laranja  |
     +---------+
</pre>

<strong>Como criar um vetor</strong>

<pre>
   //opção 1
   $variavel = ["maça", "uva", "pera", "laranja"];
   //opção 2
   $variavel = array["maça", "uva", "pera", "laranja"]; 
   //opção 3
   $variavel = [];
   $variavel [0] =  "maça";
   $variavel [1] =  "uva";
   $variavel [2] =  "pera";
   $variavel [3] =  "laranja";

</pre>    

<?php
 
 $variavel = ["maça", "uva", "pera", "laranja"];
var_dump ($variavel) . "<br>";


echo "<p>&nbsp;</p>";
echo $variavel[0] . "<br>";
echo $variavel[1] . "<br>";
echo $variavel[2] . "<br>";
echo $variavel[3] . "<br>";

echo "<p>&nbsp;</p>";
for($i = 0; $i < count ($variavel); $i++){
echo $variavel[0] . "<br>";
}

//vetor de notas
$A = array(5, 6, 8);

//como calcular a média do vetor?
$media = ($A[0] + $A[1] + $A[2]) / 3;


//imprimir a media
echo $media;



?>

