<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/main.style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/cadastro.js"></script>
 
    
</head>
<body>

    <!-- Menu -->
        <ul class="topnav">
        <a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="suport.php">Suporte</a></li>
            <li class="right"><a href="login.php">Login</a></li>
        </ul>
     <!-- FIM/menu -->

        <div class="tc">
        <br>
            <h2>Insira Seus Dados</h2>

        <!-- Formulário -->
            <fieldset>
            <div class="caixa1">
            <form method="POST" style="border: none; box-shadow: none;">
                
            <h1 style="box-shadow: none;">Informações Principais</h1>
            <label for="nn" style="box-shadow: none !important;"><b>ID</b></label><br>
            <input type="text" name="usuario" placeholder="Enter ID" id="usuario" style=" box-shadow: none !important;">
                <br>
                <br>
            <label for="email" style=" box-shadow: none !important;"><b>E-mail</b></label><br>
            <input name="email" type="email" placeholder="Enter E-mail" id="email" style=" box-shadow: none !important;" >
                <br>
                <br>
            <label for="nome" style=" box-shadow: none !important;"><b>Nick-Name</b></label><br>
            <input name="nn" type="text" placeholder="Enter Nick-Name" id="nn" style=" box-shadow: none !important;" >
                <br>
                <br>
            <label for="senha" style=" box-shadow: none !important;"><b>Senha</b></label><br>
            <input type="password" name="senha" placeholder="Enter Password" id="senha" style=" box-shadow: none !important;" required>
                <br>
                <br>
		

        </div>
        </fieldset>
    <!-- FIM/formulário -->

            <br class="aww">
                <h1>Após Todos os Campos Estarem Verificados Corretamente, Clique em Enviar</h1>


    <!-- botões -->
        <div class="btnS">
            
            <p><button class="btnE" type="submit" name="btnCadUsuario">Enviar</button></p>
        
        </form>
        <p><button type="button" class="btnR" onclick="validar()">Verificar</button></p>
        </div>
        <br>
        <br>
    </div>
    <!-- FIM/botões -->

    <!-- Footer -->
    <footer>
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
    </footer>
    <!-- FIM/footer -->

    
</body>
</html>

