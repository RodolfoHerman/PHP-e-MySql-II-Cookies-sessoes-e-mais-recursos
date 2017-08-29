<?php 
	include("conecta.php");
	include("banco-produto.php");
	include("cabecalho.php");

	if(array_key_exists('removido', $_GET) && $_GET['removido'] == TRUE) {
		echo "<p class='text-success'>Produto {$_GET['id']} removido !!</p>";
	}
?>

<table class="table table-striped table-hover table-bordered">
	<?php foreach(listaProdutos($con) as $produto): ?>
		<tr>
			<td><?php echo $produto['nome']; ?></td>
			<td><?php echo $produto['preco']; ?></td>
			<td><?php echo substr($produto['descricao'], 0, 40); ?></td>
			<td><?php echo $produto['usado'] ? 'usado' : 'novo' ?></td>
			<td><?php echo $produto['categoria_nome']; ?></td>
			<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?php echo $produto['id']; ?>">Alterar</a></td>
			<td>
				<form action="remove-produto.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
					<button type="submit" class="btn btn-danger">Remover</button>
				</form>
			</td>
		</tr>
	<?php endforeach; ?>
</table>


<?php include("rodape.php"); ?>