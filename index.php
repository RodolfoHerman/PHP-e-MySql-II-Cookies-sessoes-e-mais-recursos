<?php 
include("cabecalho.php"); 
include("logica-usuario.php");
?>
	
	<?php if(isset($_SESSION["success"])):?>
		<p class="alert-success">
			<?php 
				echo $_SESSION["success"];
				unset($_SESSION["success"]);
			?>
		</p>
	<?php endif; ?>

	<?php if(isset($_SESSION["danger"])): ?>
		<p class="alert-danger">
			<?php 
				echo $_SESSION["danger"]; 
				unset($_SESSION["danger"]);
			?>	
		</p>
	<?php endif; ?>

	<h1>Bem Vindo !!</h1>

	<?php if(usuarioEstaLogado()): ?>
		
		<p class="alert-success">você está logado como <?php echo usuarioLogado(); ?>. <a href="logout.php">Deslogar</a></p>
	
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