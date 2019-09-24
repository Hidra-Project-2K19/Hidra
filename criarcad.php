<?php 
 
$email = $_POST['email'];
$sen = MD5($_POST['sen']);
$connect = mysql_connect('Hydra','Aluno','123');
$db = mysql_select_db('nome_do_banco_de_dados');
$query_select = "SELECT login FROM usuarios WHERE login = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo email deve ser preenchido');window.location.href='
    cadastro.php';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');window.location.href='
        cadastro.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (email,senha) VALUES ('$email','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.php'</script>";
        }
      }
    }
?>