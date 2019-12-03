<?php
// Sessão
session_start();
// Conexão
require_once 'conexao.php';
// Clear
function clear($input) {
	global $conn;
	// sql
	$var = mysqli_escape_string($conn, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nomep = clear($_POST['nomep']);
	$precop = clear($_POST['precop']);
	$descricaop = clear($_POST['descricaop']);
	$caminho_img = clear($_POST['caminho_img']);
	$caminho_img1 = clear($_POST['caminho_img1']);
	$caminho_img2 = clear($_POST['caminho_img2']);

	$sql = "INSERT INTO catrpg (nomep, precop, descricaop, caminho_img, caminho_img1, caminh_img2) VALUES ('$nomep', '$precop', '$descricaop', '$caminho_img','$caminho_img1','$caminho_img2')";

	if(mysqli_query($conn, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: home.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: home.php');
	endif;
endif;
