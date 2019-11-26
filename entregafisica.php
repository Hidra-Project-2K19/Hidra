<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/cadastro.js"></script>
    
</head>
<body>

    <!-- Menu -->
        <ul class="topnav">
        <a href="home.php"><img style="vertical-align: middle; margin: 0% 47% 0% 37.5%;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="support.php">Suporte</a></li>
            <li class="right"><a href="login.php">Login</a></li>
        </ul>
     <!-- FIM/menu -->

        <div class="tc">
        <br>
            <h2>Insira Seus Dados Para Efetuar a Entrega do Jogo</h2>

        <!-- Formulário -->
        <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

            <fieldset>
            <div class="caixa1" style="box-shadow: none;">
            <form  action="cad2.php" method="POST" style="border: none; box-shadow: none;">
                
            <h1 style="box-shadow: none;">Informações Principais</h1>
            <label for="nome" style="box-shadow: none !important;"><b>Escolha o Jogo</b></label><br>
            <input type="text" name="nome" placeholder="Jogo" id="nome" style=" box-shadow: none !important;">
                <br>
                <br>
            <label for="nome" style="box-shadow: none !important;"><b>Escolha a Quantidade</b></label><br>
            <input type="text" name="nome" placeholder="Quantidade" id="nome" style=" box-shadow: none !important;">
                <br>
                <br>    
            <label for="nome" style=" box-shadow: none !important;"><b>Entre com o Endereço</b></label><br>
            <input name="text" type="email" placeholder="Endereço" id="email" style=" box-shadow: none !important;" >
                <br>
                <br>
                <label for="nome" style=" box-shadow: none !important;"><b>Entre com o Tipo de cartao</b></label><br>
            <input name="text" type="email" placeholder="Cartao" id="email" style=" box-shadow: none !important;" >
		

        </div>
        </fieldset>
    <!-- FIM/formulário -->

            <br class="aww">
                <h1>Após Todos os Campos Estarem Verificados Corretamente, Clique em Enviar</h1>


    <!-- botões -->
        <div class="btnS">
            
            <p><button class="btnEent" type="submit" name="btnCadUsuario">Enviar</button></p>
        
        </form>
        <p><button type="button" class="btnRent" onclick="validar()">Verificar</button></p>
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

