<?php 
	include("conecta.php");
	include("banco-categoria.php");
	include("banco-produto.php");
	include("cabecalho.php"); 

	$id = $_GET['id'];
	$produto = buscaProduto($con, $id);
?>

<h1>Alterar Produto</h1>

<form action="altera-produto.php" method="POST">

	<input type="hidden" name="id" value="<?php echo $id; ?>">

		<?php include("formulario-produto-base.php"); ?>

		<tr>
			<td><input type="submit" class="btn btn-primary" value="Alterar" /></td>
		</tr>
	</table>
</form>


<?php include("rodape.php"); ?>