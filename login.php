<?php

require_once("conecta.php");
require_once("banco-usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsuario($con, $_POST['email'], $_POST['senha']);

if($usuario == NULL) {
	header("Location: index.php?login=0");
} else {
	logaUsuario($usuario['email']);
	header("Location: index.php?login=1");
}

die();