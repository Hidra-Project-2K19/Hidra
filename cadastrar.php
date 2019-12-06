<?php

session_start();

if (isset($_SESSION['logado'])) {
    echo "<script> type='javascript'>alert('Acesso Negado!');";
    echo "javascript:window.location='template.php';</script>";
}

?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.style.css">
    <script src="assets/js/cadastro.js"></script>
    <!-- Seleção -->
  <style type="text/css">
    ::selection{background:rgba(157, 255, 159, 0.84);}
    ::-webkit-selection{background:rgba(157, 255, 159, 0.84);}
    ::-moz-selection{background:rgba(157, 255, 159, 0.84);}

    ins,del{text-decoration:none;}
    .t-caret{font-size:inherit;color:rgba(20, 21, 20, 0);}
    @media(max-width:800px){#t{width:400px;margin-left:-200px;}}    
  </style>
<!-- Fim Seleção -->

<style type="text/css">

    .btnS
    {

    }

    .btnR
    {
        background-color: #111;
        color: white;
        padding: 0.7rem 1.3rem;
        border-radius: 5px;
        opacity: 0.9;
        cursor: pointer;
        border-bottom-color: rgba(107, 255, 110, 0.9);
        border-bottom-style: groove;
        border-top: hidden;
        border-left-style: hidden;
        border-right-style: hidden;
        display: block;
        align-content: center;
        justify-content: space-between;
        position: absolute;
        margin: 0% 36% 0% 36%;
    }

    .btnE
    {
        background-color: #111;
        color: white;
        padding: 0.7rem 1.3rem;
        border-radius: 5px;
        opacity: 0.9;
        cursor: pointer;
        border-bottom-color: rgba(107, 255, 110, 0.9);
        border-bottom-style: groove;
        border-top: hidden;
        border-left-style: hidden;
        border-right-style: hidden;
        display: block;
        align-content: center;
        justify-content: space-between;
        position: absolute;
        margin: 0% 57% 0% 57%;
    }

    .btnS p:hover .btnR
    {
        background-color: rgba(87, 152, 88, 0.9);
        transition: 0.8s;
    }

    .btnS p:hover .btnE
    {
        background-color: rgba(87, 152, 88, 0.9);
        transition: 0.8s;
    }
</style>
    
</head>
<body>

    <!-- Menu -->
        <ul class="topnav">
        <a href="home.php"><img style="vertical-align: middle;" class="logo" src="assets/img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
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
            <form  action="controller/controller_cadastro.php" method="POST" style="border: none; box-shadow: none;">
                
            <h1 style="box-shadow: none;">Informações Principais</h1>
            <label for="nome" style="box-shadow: none !important;"><b>Nome</b></label><br>
            <input type="text" name="nome" placeholder="Seu Nome:" id="nome" style=" box-shadow: none !important;" required="">
                <br>
                <br>
            <label for="email" style=" box-shadow: none !important;"><b>E-mail</b></label><br>
            <input name="email" type="email" placeholder="Enter E-mail" id="email" style=" box-shadow: none !important;" required="">
                <br>
                <br>
            <label for="usuario" style=" box-shadow: none !important;"><b>Nick-Name</b></label><br>
            <input name="usuario" type="text" placeholder="Enter Nick-Name" id="usuario" style=" box-shadow: none !important;" required="">
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
    <img src="assets/img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
    </footer>
    <!-- FIM/footer -->

    
</body>
</html>

