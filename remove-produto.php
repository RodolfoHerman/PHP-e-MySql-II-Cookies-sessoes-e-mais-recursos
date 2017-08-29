<?php 
	include("conecta.php");
	include("banco-produto.php");
	include("cabecalho.php");

	$id = $_POST['id'];

	removeProduto($con, $id);

	header("Location: produto-lista.php?removido=true&id={$id}");
	die();
?>

<?php include("rodape.php"); ?>