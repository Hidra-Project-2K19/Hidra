<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Jogos RPG </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.style.css">
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

    <!-- Menu -->
    <ul class="topnav">
    <a href="home.php"><img style="vertical-align: middle; margin: 0% 47% 0% 47%;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
      <button class="openbtn" onclick="openNav()"><img src="img/12.png" alt="1" width="30px" height="30px"> </button>  
      <li class="right"><a href="login.php">Login</a></li>
      <li class="right"><a href="account.php">Conta</a></li>
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
    </ul>
  
<!-- FIM/Menu -->
<div class="catconteiner">
<h1 class="catjogo">RPG</h1>
</div>


<!-- Cards -->
<div class="AWP">

  <div class="card" id="card7">
    <a href="caracteristicasSKY.php"><img src="img/skyrim.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasSKY.php"><h1>TES V Skyrim</h1></a>
    <p class="price">R$39.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card16">
    <a href="caracteristicasFALL.php"><img src="img/fallimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasFALL.php"><h1>Fallout 4</h1></a>
    <p class="price">R$69,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>
</div>
<!-- FIM/Cards -->

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


</script>
      
  <footer>
  <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>    
</body>
</html>