<?php 
	include("conecta.php");
	include("banco-categoria.php");
	include("cabecalho.php"); 
?>

<h1>Formulário de cadastro</h1>

<form action="adiciona-produto.php" method="POST">
	
	<table class="table">
		<tr>
			<th>Nome: </th>
			<td><input class="form-control" type="text" name="nome" /></td>
		</tr>
		<tr>
			<th>Preço: </th>
			<td><input class="form-control" type="number" name="preco" /></td>
		</tr>
		<tr>
			<th>Descrição: </th>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		</tr>
		<tr>
			<th></th>
			<td style="text-align: left;"><input type="checkbox" name="usado" /> Usado</td>
		</tr>
		<tr>
			<th>Categoria: </th>
			<td>
				<select class="form-control" name="categoria_id">
					<?php foreach(listaCategorias($con) as $categoria): ?>
						<option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nome'] ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" class="btn btn-primary" value="Cadastrar" /></td>
		</tr>
	</table>
</form>


<?php include("rodape.php"); ?>