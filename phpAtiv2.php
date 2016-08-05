<?php

	$nome = $_GET['nome'];
	$sexo = $_GET['sexo'];
	$comentario = $_GET['coments'];

	
	$usuario = 'root';
	$senha   = 'my123';

	# Conexão com mysql via PDO_MYSQL

	try{
	$conn = new PDO("mysql:host=localhost;dbname=gomoku",$usuario,$senha);
	$conn->exec("set names utf8");

	$stmt = $conn->prepare('INSERT INTO comentario(nome, sexo, comentario) VALUES (:nome, :sexo, :comentario)');

	$stmt->bindValue(':nome', $nome);
	$stmt->bindValue(':sexo', $sexo);
	$stmt->bindValue(':comentario', $comentario);

	

	$stmt->execute();
}catch (PDOException $e){
	echo $e->getMessage();
}
?>