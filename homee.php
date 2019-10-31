<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Hydra Games</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Início - Logado </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet"> 
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

    <form action=" " method="post">
      <input type="search" id="busca" placeholder="Procurar Jogo">
      </form>
  
<!-- FIM/Menu -->


<!-- Slide -->
<div class="slide">
  <div class="w3-content w3-display-container" style="max-width:100%; max-height: 100%;">
    <img class="mySlides" src="img/fortnite.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <img class="mySlides" src="img/csgo.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <img class="mySlides" src="img/rocketleague.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
      <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>
</div>
<!-- FIM/Slide -->

<!-- PHP -->

<!-- FIM PHP -->

<h1 class="oferta">OFERTAS</h1>
<!-- Cards -->
<div class="AWP">
  <div class="card" id="card1">
    <a href="caracteristicasGOD.php"><img src="img/godimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasGOD.php"><h1>God Of War PS4</h1></a>
    <p class="price">R$179.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="God Of War PS4">
    <input type="hidden" name="preco" value="R$ 179,99">
    <input type="hidden" name="imagem" value="img/godimg.jpg" /> 
    </form>
  </div>

  <div class="card" id="card2">
    <a href="caracteristicasRL.php"><img src="img/rlimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasRL.php"><h1>Rocket League</h1></a>
    <p class="price">R$34.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Rocket League">
    <input type="hidden" name="preco" value="R$ 34,99">
    <input type="hidden" name="imagem" value="img/rlimg.jpg" /> 
    </form>
  </div>

  <div class="card" id="card3">
    <a href="caracteristicasCSGO.php"><img src="img/csgoimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasCSGO.php"><h1>CS:GO</h1></a>
    <p class="price">GRÁTIS</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="caracteristicasCSGO.php" method="POST">
    <p><button>BAIXAR</button></p>
    </form>
  </div>

  <div class="card" id="card4">
  <a href="caracteristicasFTN.php"><img src="img/fortniteimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasFTN.php"><h1>Fortnite</h1></a>
    <p class="price">GRÁTIS</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="caracteristicasFTN.php" method="POST">
    <p><button type="submit">BAIXAR</button></p> 
    </form>
  </div>



  <div class="card" id="card5">
  <a href="caracteristicasACBF.php"><img src="img/ACblack.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
  <a href="caracteristicasACBF.php"><h1>AC Black Flag</h1></a>
    <p class="price">R$59.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Assassin's Creed Black Flag">
    <input type="hidden" name="preco" value="R$ 59,99">
    <input type="hidden" name="imagem" value="img/ACblack.jpg" /> 
    </form>
  </div>

  <div class="card" id="card6">
    <a href="caracteristicasGTA.php"><img src="img/gtav.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasGTA.php"><h1>GTA V</h1></a>
    <p class="price">R$99.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Grand Theft Auto V">
    <input type="hidden" name="preco" value="R$ 99,99">
    <input type="hidden" name="imagem" value="img/gtav.jpg" /> 
    </form>
  </div>

  <div class="card" id="card7">
    <a href="caracteristicasSKY.php"><img src="img/skyrim.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasSKY.php"><h1>TES V Skyrim</h1></a>
    <p class="price">R$39.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="The Elder Scrols V Skyrim">
    <input type="hidden" name="preco" value="R$ 39,99">
    <input type="hidden" name="imagem" value="img/skyrim.jpg" /> 
    </form>
  </div>

  <div class="card" id="card8">
    <a href="caracteristicasH.php"><img src="img/halo4img.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasH.php"><h1>Halo 4</h1></a>
    <p class="price">R$24.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Halo 4">
    <input type="hidden" name="preco" value="R$ 24,99">
    <input type="hidden" name="imagem" value="img/halo4img.jpg" /> 
    </form>
  </div>
</div>
<!-- FIM/Cards -->
<br>
<br>

<!-- Introdução -->
<div class="cont">
  <p>A plataforma contém vários estilos e gêneros de jogos, além de ser fiel e manter todos os direitos autorais de todas as empresas fabricantes de seus jogos, introduzimos uma maneira eficaz de efetuar a compra dos jogos</p>
</div>
<!-- FIM/Introdução -->
<div class="AWP">
  <div class="card" id="card1">
    <a href="caracteristicasNEED.php"><img src="img/needforspeedimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasNEED.php"><h1>Need For Speed HP</h1></a>
    <p class="price">R$29.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Need For Speed Hot Pursuit">
    <input type="hidden" name="preco" value="R$ 29,99">
    <input type="hidden" name="imagem" value="img/needforspeedimg.jpg" /> 
    </form>
  </div>

  <div class="card" id="card2">
  <a href="caracteristicasJUST.php"><img src="img/just4img.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
  <a href="caracteristicasJUST.php"><h1>Just Cause 4</h1></a>
    <p class="price">R$69.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Just Cause 4">
    <input type="hidden" name="preco" value="R$ 69,99">
    <input type="hidden" name="imagem" value="img/just4img.jpg" /> 
    </form>
  </div>

  <div class="card" id="card3">
    <a href="caracteristicasOUT.php"><img src="img/outimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasOUT.php"><h1>Outlast II</h1></a>
    <p class="price">R$57,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Outlast II">
    <input type="hidden" name="preco" value="R$ 575,99">
    <input type="hidden" name="imagem" value="img/outimg.jpg" /> 
    </form>
  </div>

  <div class="card" id="card4">
    <a href="caracteristicasEURO.php"><img src="img/eurotruckimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasEURO.php"><h1>Euro Truck 2</h1></a>
    <p class="price">R$34.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Euro Truck Simuator 2">
    <input type="hidden" name="preco" value="R$ 34,99">
    <input type="hidden" name="imagem" value="img/eurotruckimg.jpg" /> 
    </form>
  </div>

  <div class="card" id="card5">
  <a href="caracteristicasMORTAL.php"><img src="img/mortal.png" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasMORTAL.php"><h1>Mortal Kombat 11</h1></a>
    <p class="price">R$199,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Mortal Kombat 11">
    <input type="hidden" name="preco" value="R$ 199,99">
    <input type="hidden" name="imagem" value="img/mortal1.png" /> 
    </form>
  </div>

  <div class="card" id="card6">
    <a href="caracteristicasRUST.php"><img src="img/rustimg.png" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasRUST.php"><h1>Rust</h1></a>
    <p class="price">R$65,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Rust">
    <input type="hidden" name="preco" value="R$ 65,99">
    <input type="hidden" name="imagem" value="img/rustimg.png" /> 
    </form>
  </div>

  <div class="card" id="card7">
    <a href="caracteristicasRAINBOW.php"><img src="img/rainbowimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasRAINBOW.php"><h1>Rainbow Six® Siege</h1></a>
    <p class="price">R$59.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Rainbow Six® Siege">
    <input type="hidden" name="preco" value="R$ 59,99">
    <input type="hidden" name="imagem" value="img/rainbowimg.jpg" /> 
    </form>
  </div>

  <div class="card" id="card8">
    <a href="caracteristicasFALL.php"><img src="img/fallimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasFALL.php"><h1>Fallout 4</h1></a>
    <p class="price">R$69,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <form action="criar.php" method="POST">
    <p><button type="submit">+ CARRINHO</button></p>
    <input type="hidden" name="nome" value="Fallout 4">
    <input type="hidden" name="preco" value="R$ 69,99">
    <input type="hidden" name="imagem" value="img/fallimg.jpg" /> 
    </form>
  </div>
</div>

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
      
  <footer>
  <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>    
</body>
</html>
 

