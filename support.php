<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Suporte </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.style.css">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
</head>
<body>
<!-- Menu -->
<ul class="topnav">
<a href="homee.php"><img style="vertical-align: middle; margin: 0% 47% 0% 33.5%;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="homee.php">Home</a></li>
            <li><a href="account.php">Conta</a></li>
            <li><a href="support.php">Suporte</a></li>
            <li class="right"><a href="cadastro.php">Cadastro</a></li>
        </ul>
     <!-- FIM/menu -->
        <div class="bg-img-supp">
        <h2>Entre Com Uma Conta Existente</h2>
        <form method="POST" enctype="multipart/form-data" action="sup.php" class="containercomment ">
            <h1>Mensagens de Suporte</h1>
            <div class="row" style="clear: both;">
      <div class="col-25">
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height: 200px; width: 250px;"></textarea>
      </div>
    </div>
    <div class="row">
</div>
            
            <button onclick="sup()" type="submit" class="btn"><a>ENVIAR</button></a>
            <script>
        function sup() {
        alert("Sua Mensagem Foi Enviada Ao Nosso Suporte e Central De Ajuda ao Usuário!   Obrigado Pela Compreensão e Ajuda com o Site!");
}
</script>
        </form>
        </div>
<div class="contato">
<p style="position: absolute; margin: 12% 1% 5% 1%;     color: #9c9c9c;">Telefones: (12)982046317/(12)996365115 <p>
<p style="position: absolute;     margin: 11% 1% 19% 73%;    color: #9c9c9c;">E-mail: igorluis0107@gmai.com/edgesleekth@gmail.com</p>
</div>
<!-- Footer -->
  <footer style="margin: 10% 0% 0% 0%;">
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>
    <!-- FIM/footer -->



</body>
</html>
