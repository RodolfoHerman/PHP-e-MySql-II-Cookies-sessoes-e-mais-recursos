<?php 
	require_once("banco-categoria.php");
	require_once("logica-usuario.php");
	require_once("cabecalho.php"); 

	verificaUsuario();
	$produto = array("nome" => "", "preco" => "", "descricao" => "", "usado" => "", "categoria_id" => "1");
?>

<h1>Formulário de cadastro</h1>

<form action="adiciona-produto.php" method="POST">
	
		<?php include("formulario-produto-base.php"); ?>

		<tr>
			<td><input type="submit" class="btn btn-primary" value="Cadastrar" /></td>
		</tr>
	</table>
</form>


<?php require_once("rodape.php"); ?>