<?php

function listaProdutos($con) {

	$query = "SELECT p.*, c.nome as categoria_nome FROM produtos p JOIN categorias c ON p.categoria_id = c.id";

	//$query = "SELECT * FROM produtos";	
	$resultado = $con->query($query);
	
	$produtos = array();

	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}

	return $produtos;
}

function buscaProduto($con, $id) {
	$query = "SELECT * FROM produtos WHERE id = {$id}";
	$resultado = $con->query($query);
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($con, $nome, $preco, $descricao, $categoria_id, $usado, $id) {
	$query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = '{$categoria_id}', usado = {$usado} WHERE id = '{$id}'";
	return $con->query($query);
}

function insereProduto($con, $nome, $preco, $descricao, $categoria_id, $usado) {
	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
	return $con->query($query);
}

function removeProduto($con, $id) {
	$query = "DELETE FROM produtos WHERE id = {$id}";
	$con->query($query);
}