<?php

include ("../includes/variaveis.php");
include("../class/class_crud.php");

$Crud=new Classcrud();

$Crud->updateDB(
	"usuarios",
	"nome=?,email=?,usuario=?,senha=?",
	array(
		$nome,
		$email,
		$nome_usuario,
		$senha
	)
);

echo "<script> type='javascript'>alert('Dados atualizados com Sucesso!');";
echo "javascript:window.location='../account.php';</script>";