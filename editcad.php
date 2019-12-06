<?php

include_once("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$senha = md5($senha);

$sql = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('". $nome ."', '". $email ."', '". $usuario ."', '". $senha ."')";

if ($conn->query($sql) === TRUE) {
    header("Location: account.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>