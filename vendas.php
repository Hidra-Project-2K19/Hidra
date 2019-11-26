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
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="print.css" type="text/css" media="print">

</head>

<body>

<!-- MenuBTN -->
<div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
      <a id="Hydrass" href="#" style="color: #39bd7a; margin: -8% 0% 8% 0%; /* margin-bottom: 4%; */">Hydra Games</a>
      <br>
        <a href="account.php">Conta</a>
        <a href="sobre.php">Sobre</a>
        <a href="support.php">suporte</a>
        <a href="carofthecompres.php">Carrinho</a>
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
            <h2>Insira Seus Dados Para Efetuar a Entrega do Jogo</h2>

        <!-- Formulário -->
        <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

            <fieldset>
            <div class="caixa1">
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
        </form>
        </div>
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
            <label class="labelV" for="fname"><i class="fa fa-user"></i> Nome Completo</label>
            <input class="inputV" type="text" id="fname" name="firstname" placeholder="Insira seu nome">
            <label class="labelV" for="email"><i class="fa fa-envelope"></i> E-mail</label>
            <input class="inputV" type="text" id="email" name="email" placeholder="ifsp@example.com">
            <label class="labelV" for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
            <input class="inputV" type="text" id="adr" name="address" placeholder="Rua 14, Número 93, Martim">
            <label class="labelV" for="city"><i class="fa fa-institution"></i> Cidade</label>
            <input class="inputV" type="text" id="city" name="city" placeholder="Caraguatatuba">

            <div class="row">
              <div class="col-50">
                <label class="labelV" for="state">Estado</label>
                <input class="inputV" type="text" id="state" name="state" placeholder="SP">
              </div>
              <div class="col-50">
                <label class="labelV" for="zip">CEP</label>
                <input class="inputV" type="text" id="zip" name="zip" placeholder="12345-678">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label class="labelV" for="fname">Cartões Aceitáveis</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label class="labelV" for="cname">Nome no cartão</label>
            <input class="inputV" type="text" id="cname" name="cardname" placeholder="Cleitu Rasta">
            <label class="labelV" for="ccnum">Número do cartão de crédito</label>
            <input class="inputV" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label class="labelV" for="expmonth">Mês de expiração do cartão</label>
            <input class="inputV" type="text" id="expmonth" name="expmonth" placeholder="Dezembro">
            <div class="row">
              <div class="col-50">
                <label class="labelV" for="expyear">Ano de Expiração</label>
                <input class="inputV" type="text" id="expyear" name="expyear" placeholder="2028">
              </div>
              <div class="col-50">
                <label class="labelV" for="cvv">Código de Segurança</label>
                <input class="inputV" type="text" id="cvv" name="cvv" placeholder="012">
              </div>
            </div>
          </div>
          
        </div>
        <label class="labelV">
          <input class="inputV" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input class="inputV" type="submit" value="Continue to checkout" class="btnv" style="background-color: rgb(85, 208, 87); border-radius: 5px; margin: 3% 35%;">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="containerC" style="background-color: #1c1c1c; margin: -84.5% 6% 16% 79%; border: 1px solid black; border-radius: 3px; position: absolute;">
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
            <p><button class="btnEvendas" type="submit" name="btnCadUsuario">Enviar</button></p>


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