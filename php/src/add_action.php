<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$comentario = filter_input(INPUT_POST, 'comentario');

if($name && $email){
	
	$sql = $conn->prepare("INSERT INTO comentarios (nome, email, comentario) VALUES (:name, :email, :comentario)");
        $sql->bindValue(':name', $name);
	$sql->bindValue('email', $email);
	$sql->bindValue('comentario', $comentario);
	$sql->execute();

	header("Location: index.php");
	exit;
}else{
	header("Location: add.php");
	exit;
}
?>
