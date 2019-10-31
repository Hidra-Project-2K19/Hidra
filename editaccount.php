<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edição da conta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/cadastro.js"></script>

    
</head>
<body>
    <!-- Menu -->
        <ul class="topnav">
        <a href="homee.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="homee.php">Home</a></li>
            <li><a href="support.php">Suporte</a></li>
            <li class="right"><a href="account.php">Voltar</a></li>
        </ul>
     <!-- FIM/menu -->

        <div class="tc">
        <br>
            <h2>Altere Suas Informações</h2>

        <!-- Formulário -->

            <fieldset>
            <div class="caixa1">
            <form  action="cad2.php" method="POST" style="border: none; box-shadow: none;">
                
            <h1 style="box-shadow: none;">Informações Principais</h1>
            <label for="nome" style="box-shadow: none !important;"><b>ID</b></label><br>
            <input type="text" name="nome" placeholder="Enter ID" id="nome" style=" box-shadow: none !important; margin-top: 10%;">
                <br>
                <br>
            <label for="email" style=" box-shadow: none !important;"><b>E-mail</b></label><br>
            <input name="email" type="email" placeholder="Enter E-mail" id="email" style=" box-shadow: none !important; margin-top: 28%;" >
                <br>
                <br>
            <label for="usuario" style=" box-shadow: none !important;"><b>Nick-Name</b></label><br>
            <input name="usuario" type="text" placeholder="Enter Nick-Name" id="usuario" style=" box-shadow: none !important; margin-top: 19%;" >
                <br>
                <br>
            <label for="senha" style=" box-shadow: none !important;"><b>Senha</b></label><br>
            <input type="password" name="senha" placeholder="Enter Password" id="senha" style=" box-shadow: none !important; margin-top: 37%;" required>
                <br>
                <br>
		

        </div>
        </fieldset>
        

            <br class="aww">
        
            
    <!-- FIM/formulário -->

            <br class="aww">
                <h1>Após Todos os Campos Estarem Verificados Corretamente, Clique em Enviar</h1>


    <!-- botões -->
        <div class="btnS">
            
            <p><button type="submit" class="btnE">Enviar </button></p>
        
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

<!-- <fieldset> -->
                <!-- <div class="caixa3"> -->
                
                        
                    <!-- <h1 style=" border: none; box-shadow: none;">Alterar Imagem</h1> -->
        

                    <!-- <input type="file" name="arquivo" id="arquivo"/> -->
                    <!-- Troca Imagem -->
                         <?php

                        // $diretorio = "envios/";
                        // # criação do diretório de forma dinâmica
                        // if(!file_exists($diretorio)) {
                        // mkdir($diretorio);
                        // }

                        // $arquivo = $diretorio . basename($_FILES["arquivo"]["name"]);

                        // $envio_ok = 1;

                        // # verificar se o arquivo é mesmo uma imagem
                        // $check = getimagesize($_FILES["arquivo"]["tmp_name"]);
                        // if($check !== false) {
                        //     echo "<p>Arquivo é uma imagem - " . $check["mime"] . ".</p>";
                        // } else {
                        //     echo "<p>Arquivo não é uma imagem.</p>";
                        //     $envio_ok = 0;
                        // }

                        // # validar tamanho do arquivo
                        // if ($_FILES["arquivo"]["size"] > 500000) {
                        //     echo "<p>O tamanho do arquivo é maior do que o parmitido.</p>";
                        //     $envio_ok = 0;
                        // }

                        // // limitar os formatos de arquivos
                        // $tipo_arquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
                        // if($tipo_arquivo != "jpg" && $tipo_arquivo != "png" && $tipo_arquivo != "jpeg"
                        // && $tipo_arquivo != "gif" ) {
                        //     echo "<p>Apenas arquivos com extensão JPG, JPEG, PNG ou GIF são permitidos.</p>";
                        //     $envio_ok = 0;
                        // }

                        // if($envio_ok == 0) {
                        // echo "<p>O arquivo não foi enviado.</p>";
                        // } else {
                        // if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $arquivo)) {
                        //     echo "<p>O arquivo $arquivo foi enviado com sucesso.</p>";
                        // } else {
                        //     echo "<p>Houve um erro ao realizar o envio do arquivo.</p>";
                        // }
                        // }

                        ?>
                         <!-- FIM troca imagem -->
                        <!-- <br>
                        <br>
                </div>
            </fieldset> -->