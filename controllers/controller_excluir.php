<?php
class categoriesController extends controller {

	private $user;
	include '../class/class_crud.php';

	$Crud= new Classcrud();
	$idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

	$Crud->deleteDB(
    "usuarios",
    "Id=?",
    array(
       $idUser
    )
);
}

//Encerrando a sessão

session_start();
session_unset();
session_destroy();

echo "<script> type='javascript'>alert('Dados deletado com sucesso!');";
echo "javascript:window.location='../home.php';</script>";











?>