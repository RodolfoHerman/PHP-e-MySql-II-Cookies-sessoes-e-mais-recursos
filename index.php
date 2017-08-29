<?php 
include("cabecalho.php"); 
include("logica-usuario.php");
?>
	
	<?php if(array_key_exists('login', $_GET) && $_GET['login'] == TRUE):?>
		<p class="alert-success">Logado com sucesso !!</p>
	<?php endif; ?>

	<?php if(array_key_exists('login', $_GET) && $_GET['login'] == FALSE): ?>
		<p class="alert-danger">Usuário e/ou senha inválido(s)</p>
	<?php endif; ?>

	<?php if(array_key_exists('falhaDeSeguranca', $_GET) && $_GET['falhaDeSeguranca'] == TRUE): ?>
		<p class="alert-danger">Você não possui acesso a esta funcionalidade</p>
	<?php endif; ?>

	<h1>Bem Vindo !!</h1>

	<?php if(usuarioEstaLogado()): ?>
		
		<p class="alert-success">você está logado como <?php echo usuarioLogado(); ?></p>
	
	<?php else: ?>

		<h2>Login</h2>

		<form action="login.php" method="POST">
			<table class="table">
				<tr>
					<td>E-mail: </td>	
					<td><input class="form-control" type="email" name="email" /></td>
				</tr>
				<tr>
					<td>Senha: </td>
					<td><input class="form-control" type="password" name="senha" /></td>
				</tr>
			<tr>
				<td>
					<button type="submit" class="btn btn-primary">Login</button>
				</td>
			</tr>
			</table>
		</form>

	<?php endif; ?>

<?php include("rodape.php"); ?>	