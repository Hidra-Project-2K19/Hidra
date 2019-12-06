<?php

	//ID

	if (isset($_POST['id'])) {
		$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['id'])) {
		$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$id = 0;
	}

	//Nome

	if (isset($_POST['nome'])) {
		$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['nome'])) {
		$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$nome = "";
	}

	//Nome de usuário
	if (isset($_POST['usuario'])) {
		$nome_usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['usuario'])) {
		$nome_usuario = filter_input(INPUT_GET,'usuario',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$nome_usuario = "";
	}

	//Email

	if (isset($_POST['email'])) {
		$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	elseif (isset($_GET['email'])) {
		$email = filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$email = "";
	}

	//Senha

	if (isset($_POST['senha'])) {
		$senha = md5(filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS));
	}

	elseif (isset($_GET['senha'])) {
		$senha = md5(filter_input(INPUT_GET,'senha',FILTER_SANITIZE_SPECIAL_CHARS));
	}
	else{
		$senha = "";
	}

?>