<?php 
	include("conecta.php");
	include("banco-produto.php");
	include("logica-usuario.php");
	include("cabecalho.php");

	$id = $_POST['id'];

	removeProduto($con, $id);

	$_SESSION["success"] = "Produto {$id} removido !";
	header("Location: produto-lista.php");
	die();
?>

<?php include("rodape.php"); ?>