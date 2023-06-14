<<<<<<< HEAD
<?php
	 //só usuario logados podem excluir
	 require_once "../login/controlar_acesso.php";
	//importa o arquivo de conexão
	require_once "../banco/conexao.php";
	
    if(isset($_POST['titulo']) && isset($_POST['materia']) && isset($_POST['categoria'])) {
	

	require_once "faz_upload.php";

	$titulo = $_POST['titulo'];
	$materia = $_POST['materia'];
	$categoria = $_POST['categoria'];
	$foto = $nome_foto;

	//cria uma variável com um comando SQL
	$SQL = "INSERT INTO `noticia` (`titulo`, `materia`, `categoria`, `foto`) VALUES (?, ?, ?, ?);";
	
	//prepara o comando para ser executado no mysql
	$comando = $conexao->prepare($SQL);

	//faz a vinculação dos parâmetros ?, ?, ?, ?
	$comando->bind_param("ssss", $titulo, $materia, $categoria, $nome_foto);

	//executa o comando
	$comando->execute();
    }
	//volta para o formulário
=======
<?php
	 //só usuario logados podem excluir
	 require_once "../login/controlar_acesso.php";
	//importa o arquivo de conexão
	require_once "../banco/conexao.php";
	
    if(isset($_POST['titulo']) && isset($_POST['materia']) && isset($_POST['categoria'])) {
	

	require_once "faz_upload.php";

	$titulo = $_POST['titulo'];
	$materia = $_POST['materia'];
	$categoria = $_POST['categoria'];
	$foto = $nome_foto;

	//cria uma variável com um comando SQL
	$SQL = "INSERT INTO `noticia` (`titulo`, `materia`, `categoria`, `foto`) VALUES (?, ?, ?, ?);";
	
	//prepara o comando para ser executado no mysql
	$comando = $conexao->prepare($SQL);

	//faz a vinculação dos parâmetros ?, ?, ?, ?
	$comando->bind_param("ssss", $titulo, $materia, $categoria, $nome_foto);

	//executa o comando
	$comando->execute();
    }
	//volta para o formulário
>>>>>>> e3b4a24e55719a86a6e0dbc1cada1feeeff48a93
	header("Location: index.php");