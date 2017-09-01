<?php 
	include("conecta.php");
	include("banco-categoria.php");
	include("logica-usuario.php");
	include("cabecalho.php"); 

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


<?php include("rodape.php"); ?>