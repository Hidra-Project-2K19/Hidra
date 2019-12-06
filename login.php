<?php

session_start();

?>  
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Faça Login Para Continuar </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="assets/css/main.style.css" type="text/css" />
</head>
<body>

  <?php

//Conexão
require_once 'conexao.php';

//Sessão
// session_start();

if (isset($_SESSION['logado'])) {
    echo "<script> type='javascript'>alert('Acesso Negado!');";
    echo "javascript:window.location='home.php';</script>";
}

//Botão Enviar
if(isset($_POST['btn-entrar'])):
  $erros = array();
  $email = mysqli_escape_string($connect, $_POST['email']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

  if(isset($_POST['lembrar-senha'])):

    setcookie('email', $email, time()+3600);
    setcookie('senha', md5($senha), time()+3600);
  endif;

  if(empty($email) or empty($senha)):
    $erros[] = "<h6 style=\"font-weight: 100;
        color: rgba(255, 0, 0, 0.678);
        padding: 5px;
        background-color: rgba(255, 0, 0, 0.294);
        border: 1px solid rgba(255, 0, 0, 0.575);
        border-radius: 10px;
        width: 274px;\">
        Campo e-mail/senha não preenchidos
    </h6>";
  else:
    $sql = "SELECT email FROM usuarios WHERE email = '$email'";
    $res = mysqli_query($connect, $sql);

    if(mysqli_num_rows($res) > 0):
    $senha = md5($senha);
    $sql = "SELECT * FROM usuarios WHERE senha = '$senha'AND email = '$email'";
    $res = mysqli_query($connect, $sql);

      if(mysqli_num_rows($res) == 1):
        $dados = mysqli_fetch_array($res);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        echo "<script> type='javascript'>alert('Login Efetuado com Sucesso!');";
        echo "javascript:window.location='home.php';</script>";

      else:
        $erros[] = "<h3 style=\"font-weight: 100;
                color: rgba(255, 0, 0, 0.678);
                padding: 5px;
                background-color: rgba(255, 0, 0, 0.294);
                border: 1px solid rgba(255, 0, 0, 0.575);
                border-radius: 10px;
                width: 219px;\">
                Usuário e senha não conferem
            </h3>";
      endif;
    else:
      $erros[] = "<h3 style=\"font-weight: 100;
            color: rgba(255, 0, 0, 0.678);
            padding: 5px;
            background-color: rgba(255, 0, 0, 0.294);
            border: 1px solid rgba(255, 0, 0, 0.575);
            border-radius: 10px;
            width: 139px;\">
            Usuário inexistente
        </h3>";
    endif;

  endif;

endif;
?>
<!-- Menu -->
<ul class="topnav">
<a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="support.php">Suporte</a></li>
            <li class="right"><a href="cadastrar.php">Cadastro</a></li>
        </ul>
     <!-- FIM/menu -->

        <div class="bg-img">
        <h2>Entre Com Uma Conta Existente</h2>
        <form method="POST" action="" class="container">

          

            <h1>Login</h1>

            <?php
                if(!empty($erros)):
                  foreach($erros as $erro):
                    echo $erro;
                  endforeach;
                endif;
                    if(isset($_GET['suce'])):
                        $erro = $_GET['suce'];
                        echo $erro;

                    endif;
            ?>

            <?php
                if(isset($_GET['comp'])):
                    $comp = $_GET['comp'];
                   $comp2 = "<h3 style=\"font-weight: 150 px;
                   color: rgba(255, 0, 0, 0.678);
                   padding: 10px;
                   margin-top: 20px;
                   background-color:
                   rgba(255, 0, 0, 0.294);
                   border: 5px solid rgba(255, 0, 0, 0.575);
                   border-radius: 10px;
                   width: 274px;\">
                   $comp
                   </h3>";
                   echo $comp2;
                endif;
                ?>

            <label for="usuario"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="email" required>

            <label for="senha"><b>Senha</b></label>
            <input type="password" placeholder="Enter Password" name="senha" required>

            <button type="submit" id="entrar" name="btn-entrar" class="btn"><a>ENTRAR</button></a>
>>>>>>> Stashed changes
        </form>
        </div>

        <a href="cadastrar.php"><button class="btnn">Clique Aqui Para Registrar-se</button></a>

<!-- Footer -->
  <footer>
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>
    <!-- FIM/footer -->



</body>
</html>
