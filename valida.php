<?php
session_start();
include_once("conexao.php");

/*
echo "<pre>";
var_dump($_SESSION);
var_dump($_POST);
echo "</pre>";
*/

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE nome = '". $usuario ."' AND senha = '". md5($senha) ."' LIMIT 1;";
//$sql = "SELECT * FROM usuarios;"; // sql para obter os dados que quer apresentar
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	// echo "<table border=1>"; // apresentação em formato de tabela

	while($row = $result->fetch_assoc()) {
        //echo "<pre>";
		//var_dump($row);
		//echo "</pre>";

		$id = $row["id"];
		$nome = $row["nome"];
		$email =  $row["email"];
		$usuario = $row["usuario"];
		$senha = $row["senha"];

		$_SESSION["id"] = $id;
		$_SESSION["nome"] = $nome;
		$_SESSION["email"] = $email;
		$_SESSION["usuario"] = $usuario;
		$_SESSION["senha"] = $senha;
		
		
		session_abort();
		header("Location: homee.php");
		/*
		echo "<tr>";
		echo "<td>$id</td>";
		echo "<td>$nome</td>";
		echo "<td>$email</td>";
		echo "<td>$usuario</td>";
		echo "<td>$senha</td>";
		echo "</tr>";
		*/
	}
	
	//echo "</table>";

} else {
    header("Location: login.php");
}

/*
$btnLogin = filter_input(INPUT_POST, 'entrar', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: ../homee.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login.php");
}
*/

?>