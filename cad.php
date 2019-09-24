<?php

session_start();

$_SESSION['id'] = $_POST["id"];
$_SESSION['email'] = $_POST["email"];
$_SESSION['nn'] = $_POST["nn"];
$_SESSION['sen'] = $_POST["sen"];
$_SESSION['senh'] = $_POST["senh"];
$_SESSION['rec'] = $_POST["rec"];
$_SESSION['cod'] = $_POST["cod"];
$_SESSION['reg'] = $_POST["reg"];

header("Location: homee.php"); 
?>