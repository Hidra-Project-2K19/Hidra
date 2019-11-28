<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Efetuando Compra</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.style.css">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<script src="js/cadastro.js"></script>
</head>

<body>

<!-- MenuBTN -->
<div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
      <a id="Hydrass" href="#" style="color: #39bd7a; margin: -8% 0% 8% 0%; /* margin-bottom: 4%; */">Hydra Games</a>
      <br>
      <a href="login.php">Conta</a>
            <a href="login.php">Carrinho</a>
            <a href="help.php">Ajuda</a>
            <a href="support.php">Suporte</a>
            <a href="sobre.php">Sobre</a>
      </div>
    </div>
    <!-- FIM/MenuBTN -->

<!-- Login -->
    

<!-- FIM/Login -->

    <!-- Menu -->
    <ul class="topnav">
    <a href="homee.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
      <button class="openbtn" onclick="openNav()"><img src="img/12.png" alt="1" width="30px" height="30px"> </button>  
      <li style="vertical-align: right;" class="right"><a href="home.php">Deslogar</a></li>
      <li style="vertical-align: right;" class="right"><a href="account.php">Conta</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">Categorias</a>
        <div class="dropdown-content">
          <a href="catacao.php">Ação</a>
          <a href="catindie.php">Indie</a>
          <a href="catestrate.php">Estratégia</a>
          <a href="catesportes.php">Esportes</a>
          <a href="catbatle.php">Batle Royale</a>
          <a href="catrpg.php">RPG</a>
          <a href="catgratis.php">Gratuito</a>
        </div>
      </li>
      <div class="logado">
      
      <?php

        $nome = $_POST["nome"];
        echo $nome;
                
        $usuario = $_POST["usuario"];
        echo  $usuario;

        ?>
        </div>
        <div class="avatar">
          <?php
          $arquivo = $_POST["arquivo"];
          echo  $arquivo;
          ?>
        </div>
    </ul>

  
<!-- FIM/Menu -->




<div class="tc">
        <br>

        <!-- Formulário -->
        <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

           
        <br>
        <br>
    </div>

<h2 style="margin: 20px;">Informe seus dados para efetuar a compra</h2>
<div class="row">

  <div class="col-75">
    <div class="containerV">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Informações Pessoais</h3>
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="fname"><i class="fa fa-user"></i> Nome Completo</a>
            <input class="inputV" type="text" id="fname" name="firstname" placeholder="Insira seu nome">
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="email"><i class="fa fa-envelope"></i> E-mail</a>
            <input class="inputV" type="text" id="email" name="email" placeholder="ifsp@example.com">
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="adr"><i class="fa fa-address-card-o"></i> Endereço</a>
            <input class="inputV" type="text" id="adr" name="address" placeholder="Rua 14, Número 93, Martim">
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="city"><i class="fa fa-institution"></i> Cidade</a>
            <input class="inputV" type="text" id="city" name="city" placeholder="Caraguatatuba">

            <div class="row">
              <div class="col-50">
                <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="state">Estado</a>
                <input class="inputV" type="text" id="state" name="state" placeholder="SP">
              </div>
              <div class="col-50">
                <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="zip">CEP</a>
                <input class="inputV" type="text" id="zip" name="zip" placeholder="12345-678">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="fname">Cartões Aceitáveis</a>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="cname">Nome no cartão</a>
            <input class="inputV" type="text" id="cname" name="cardname" placeholder="Cleitu Rasta">
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="ccnum">Número do cartão de crédito</a>
            <input class="inputV" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="expmonth">Mês de expiração do cartão</a>
            <input class="inputV" type="text" id="expmonth" name="expmonth" placeholder="Dezembro">
            <div class="row">
              <div class="col-50">
                <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="expyear">Ano de Expiração</a>
                <input class="inputV" type="text" id="expyear" name="expyear" placeholder="2028">
              </div>
              <div class="col-50">
                <a style="color: #f1f1f1; box-shadow: none !important;" class="labelV" for="cvv">Código de Segurança</a>
                <input class="inputV" type="text" id="cvv" name="cvv" placeholder="012">
              </div>
            </div>
          </div>
          
        </div>
        <label class="labelV">
          <a style="color: #f1f1f1; box-shadow: none !important;" class="inputV" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing</a>
        <input class="inputV" type="submit" value="Continue to checkout" class="btnv" style="background-color: rgb(85, 208, 87); border-radius: 5px; margin: 3% 35%;">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="containerC" style="padding: 1% 3% 1% 3%; background-color: #1c1c1c; margin: -100.8% 6% 16% 79%; border: 1px solid black; border-radius: 3px; position: absolute;">
      <h4>Carrinho <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Produto 1</a> <span class="price">R$150</span></p>
      <p><a href="#">Produto 2</a> <span class="price">R$36</span></p>
      <p><a href="#">Produto 3</a> <span class="price">R$59</span></p>
      <p><a href="#">Produto 4</a> <span class="price">R$199</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>R$444</b></span></p>
    </div>
  </div>
  
</div>



<br class="aww">
                <h1>Após Todos os Campos Estarem Verificados Corretamente, Clique em Enviar</h1>
    <!-- botões -->
        <div class="btnS">
            <p><button class="btnEvendas" onclick="compra()" name="btnCadUsuario">Enviar</button></p>
            <script>
        function compra() {
        alert("Seu Produto Será Entregue Diretamente No Seu E-mail Informado Em Seu Cadastro!!                                                                                  Obrigado Por Comprar Em Hydra Games!");
}
</script>



<!-- Footer -->
<footer style="margin-top: 6%;">
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>
    <!-- FIM/footer -->

</body>

<script>
// botão Menu
  function openNav() 
  {
    document.getElementById("myNav").style.height = "100%";
  }

  function closeNav() 
  {
    document.getElementById("myNav").style.height = "0%";
  }
// Fim Botão

// Slide
  var slideIndex = 1;
    showDivs(slideIndex);

  function plusDivs(n) 
  {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) 
  {
    showDivs(slideIndex = n);
  }

  function showDivs(n) 
  {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-white";
  }
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); 
  }
  // Fim Slide
</script>
</html>