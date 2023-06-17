
<?php
	 
	
	require_once "../banco/conexao.php";
	
    if(isset($_POST['titulo']) && isset($_POST['contexto'])  && isset($_POST['categoria'])) {
	



	$titulo = $_POST['titulo'];
	$contexto = $_POST['contexto'];
	$categoria = $_POST['categoria'];
	$foto = $nome_foto;

	require_once "faz_upload.php";
	
	
	$SQL = "INSERT INTO `mensagens` (`titulo`, `contexto`, `categoria`, `foto`) VALUES (?, ?, ?, ?);";
	

	$comando = $conexao->prepare($SQL);

	$comando->bind_param("ssss", $titulo, $contexto, $categoria, $nome_foto);

	$comando->execute();
    }
	

	header("Location: index.php");