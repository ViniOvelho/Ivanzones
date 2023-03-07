<style>
.grid {
    display: grid;
    grid-template-rows: auto auto;
    grid-template-columns: auto auto auto auto auto;
    gap: 10px;
}
    </style>

<h2> Estrutura de repetição - for </h2>
<p>
    Utilizada para repetir um conjunto de instruções por um número determinado de vezes.
</p>
<strong>EXEMPLO</strong>
<pre>
for (inicio, condição, passo){
    //comandos a serem repetidos.
}

</pre>

<div class="grid">

<?php
for($contador2 = 1; $contador2 <= 10; $contador2++) {
    
    echo "<div class='tabuada'>";

for ($contador = 1; $contador <= 10; $contador++){
    $resultado = $contador2 * $contador;
echo "te agarro pela cabeça e te jooj $contador2 x $contador = $resultado <br>";

}
echo "</div>";

}
?>
</div>