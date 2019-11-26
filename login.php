<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Faça Login Para Continuar </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.style.css">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
</head>
<body>
<!-- Menu -->
<ul class="topnav">
<a href="home.php"><img style="vertical-align: middle; height: 52px; width: 77px; position: absolute;    margin: 0% 49% 0% 34%; border-radius: 10px; cursor: pointer;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="account.php">Conta</a></li>
            <li><a href="support.php">Suporte</a></li>
            <li class="right"><a href="cadastrar.php">Cadastro</a></li>
        </ul>
     <!-- FIM/menu -->

        <div class="bg-imglog">
        <h2>Entre Com Uma Conta Existente</h2>
        <form method="POST" action="valida.php" class="containerrlog">
            <h1>Login</h1>

            <label for="usuario"><b>ID</b></label>
            <input class="inputlog" type="text" placeholder="Enter ID" name="usuario" required style="margin: 16% 0% -5% 0%;">

            <label for="senha"><b>Senha</b></label>
            <input class="inputlog" type="password" placeholder="Enter Password" name="senha" required style="margin: 33% 0% -5% 0%;">

            <button type="submit" id="entrar" name="entrar" class="btn" style="margin-top: 70%;"><a>ENTRAR</button></a>
        </form>
        </div>

        <a href="cadastrar.php"><button class="btnn">Clique Aqui Para Registrar-se</button></a>

<!-- Footer -->
  <footer class="footerlog">
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>
    <!-- FIM/footer -->
</body>
</html>
