<?php

require_once("conecta.php");
require_once("banco-usuario.php");

$usuario = buscaUsuario($con, $_POST['email'], $_POST['senha']);

if($usuario == NULL) {
	header("Location: index.php?login=0");
} else {
	header("Location: index.php?login=1");
}

die();