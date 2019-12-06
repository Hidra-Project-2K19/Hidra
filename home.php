<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Hydra Games</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Início </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.style.css">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
</head>
<body>

  <?php
  if (empty($_SESSION['logado'])):
    echo "<!-- Menu_reposivo_nao_logado -->
    <div id=\"myNav\" class=\"overlay\">
    <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
    <div class=\"overlay-content\">
    <a id=\"Hydrass\" href=\"#\" style=\"color: #39bd7a; margin: -8% 0% 8% 0%; /* margin-bottom: 4%; */\">Hydra Games</a>
    <br>
    <a href=\"cadastrar.php\">Cadastrar</a>
    <a href=\"login.php\">Login</a>
    <a href=\"sobre.php\">Sobre</a>
    <a href=\"support.php\">suporte</a>
    </div>
    </div>

    <!-- FIM/MenuBTN -->

    <!-- Menu -->

    <!--- Barra de pesquisa ---->
    <form action=\"pesquisa.php\" method=\"POST\">

      <input type=\"text\" name=\"pesquisa\" placeholder=\"Digite o nome do jogo\" id=\"pesquisa\" style=\" left: 5%; color: #ffffff; position: fixed; z-index: 2; background-color: #333; border-radius: 0%; box-shadow: none !important;\">
    </form>

    <ul class=\"topnav\">
    <img style=\"margin: -0.5% 0% 0% -2.5%; vertical-align: middle;\" class=\"logo\" src=\"assets/img/HYDRA-WHITEE.png\" alt=\"Hydra Games\"></a>
    <button class=\"openbtn\" onclick=\"openNav()\"><img src=\"assets/img/12.png\" alt=\"1\" width=\"30px\" height=\"30px\"></button>
    <li class=\"right\"><a href=\"Cadastrar.php\">Cadastro</a></li>  
    <li class=\"right\"><a style=\"left: 89%;\" href=\"login.php\">Login</a></li>
    <li class=\"dropdown\">
    <a href=\"#\" class=\"dropbtn\">Categorias</a>
    <div class=\"dropdown-content\">
    <a href=\"cata.php?categ=acao\">Ação</a>
    <a href=\"cata.php?categ=Indie\">Indie</a>
    <a href=\"cata.php?categ=Estrategia\">Estratégia</a>
    <a href=\"cata.php?categ=Esportes\">Esportes</a>
    <a href=\"cata.php?categ=BatleRoyale\">Batle Royale</a>
    <a href=\"cata.php?categ=RPG\">RPG</a>
    </div>
    </li>
    </ul>
    <!-- FIM/Menu -->";
  else:
    echo "<!-- Menu_reposivo_nao_logado -->
   <div id=\"myNav\" class=\"overlay\">
      <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
      <div class=\"overlay-content\">
      <a id=\"Hydrass\" href=\"#\" style=\"color: #39bd7a; margin: -8% 0% 8% 0%; /* margin-bottom: 4%; */\">Hydra Games</a>
      <br>
        <a href=\"account.php\">Conta</a>
        <a href=\"sair.php\">Sair</a>
        <a href=\"sobre.php\">Sobre</a>
        <a href=\"support.php\">suporte</a>
      </div>
    </div>
    <!-- FIM/MenuBTN -->

    <!-- Menu -->
    <form action=\"pesquisa.php\" method=\"POST\">

      <input type=\"text\" name=\"pesquisa\" placeholder=\"Digite o nome do jogo\" id=\"pesquisa\" style=\" box-shadow: none !important;\">
    </form>
    <ul class=\"topnav\">
    <a href=\"home.php\"><img style=\"vertical-align: middle;\" class=\"logo\" src=\"assets/img/HYDRA-WHITEE.png\" alt=\"Hydra Games\"></a>
      <button class=\"openbtn\" onclick=\"openNav()\"><img src=\"assets/img/12.png\" alt=\"1\" width=\"30px\" height=\"30px\"> </button>
      <li class=\"right\"><a href=\"account.php\">Conta</a></li>  
      <li class=\"right\"><a href=\"sair.php\">Sair</a></li>
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropbtn\">Categorias</a>
        <div class=\"dropdown-content\">
          <a href=\"cata.php?categ=acao\">Ação</a>
          <a href=\"cata.php?categ=Indie\">Indie</a>
          <a href=\"cata.php?categ=Estrategia\">Estratégia</a>
          <a href=\"cata.php?categ=Esportes\">Esportes</a>
          <a href=\"cata.php?categ=Batle Royale\">Batle Royale</a>
          <a href=\"cata.php?categ=RPG\">RPG</a>
        </div>
      </li>
     
    </ul>

<!-- FIM/Menu -->

  ";
endif;

  ?>



<!-- Slide -->
<div class="slide">
  <div class="w3-content w3-display-container" style="max-width:100%; max-height: 100%;">
    <img class="mySlides" src="assets/img/fortnite.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <img class="mySlides" src="assets/img/csgo.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <img class="mySlides" src="assets/img/rocketleague.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>
</div>
<!-- FIM/Slide -->


<h1 class="oferta">OFERTAS</h1>
<!-- Cards -->
<?php
include("class/class_crud.php");
$Crud=new Classcrud();
$BFetch=$Crud->selectDB(
  "*",
  "jogos",
  "",
  array()
  );
  while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
  ?>
<div class="AWP">
  <div class="card" id="card1">
    <a href="<?php echo "visu_jogo.php?id={$Fetch['id']}"; ?>"><img src="assets/img/<?php echo $Fetch['img_1']; ?>" width="250px" height="300px"></a>
    <a href="<?php echo "visu_jogo?id={$Fetch['id']}"; ?>"><h1><?php echo $Fetch['nome_J']; ?></h1></a>
    <p class="price"><?php echo $Fetch['preco']; ?></p>

    <p>Disponível na Plataforma Hydra</p>
    <a href="login.php"><p><button>+ CARRINHO</button></p></a>
  </div>


  <?php
      }
  ?>


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
  <img src="assets/img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>    
</body>
</html>
