<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loja Web</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets/img/php.ico"/>
</head>
<body>

	<?php

		

	use core\classes\Database;

	//Abrir a Sessão
	session_start();

	//Carregar o Config
	require_once('../config.php');

	//Carregar todas as classes do projeto
	require_once('../vendor/autoload.php');

	$base_d = new Database();
	$clientes = $base_d->select("SELECT * FROM clientes");
	echo '<prev>';

	echo 'Sapup3';

?>
	
	<script src="js/script.js"></script>
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas
    31/03/2022
-->