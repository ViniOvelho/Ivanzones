
<?php

if (!empty($_FILES['foto']['name'])){

$origem = $_FILES['foto']["tmp_name"];


$nome_foto = time().$_FILES['foto']['name'];


$destino = "../uploads/$nome_foto";

move_uploaded_file($origem, $destino);
}else{
$nome_foto = "sem_foto.png";
}

