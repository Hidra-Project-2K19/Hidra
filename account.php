<?php
session_start();
include_once("conexao.php");

if (empty($_SESSION['logado'])) {
  echo "<script> type='javascript'>alert('Acesso Negado!');";
  echo "javascript:window.location='login.php';</script>";
}

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sua Conta</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.style.css">
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
    <a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
      <button class="openbtn" onclick="openNav()"><img src="img/12.png" alt="1" width="30px" height="30px"> </button>  
      <li class="right"><a href="account.php">Conta</a></li>
      <li class="right"><a href="sair.php">Sair</a></li>
      <!-- PHP -->
      <?php

        
      ?>
      <!-- FIM PHP -->
    </ul>
  
<!-- FIM/Menu -->

<!-- Profile Card -->
<div class="AWP">
  <div class="card" id="card1">
 
   <h4>E-mail:</h4>
    <a><h3><?php echo $dados['email']; ?></h3></a><br>
    <h4>Nome:</h4>
    <a><h1><?php echo $dados['nome']; ?></h1></a><br>
    <h4>Nome de Usuario:</h4>
    <a><h1><?php echo $dados['usuario']; ?></h1></a><br>
    <p class="price">Hydra Profile</p>
    <p>Altere Suas Informações</p>
    <a href="editaccount.php?id=<?php echo $dados['id']; ?>"><p><button>Editar Perfil</button></p></a>
    <a href="controller/controller_excluir.php?id=<?php echo $dados['id']; ?>"><p><button>Excluir Perfil</button></p></a>
    <?php
    if($dados['id'] == 9 and 1):
      echo '<a href=add_jogo.php class=btn red><button>Adicionar Jogos</button></a>';
    endif;
    ?>
  </div>
<!-- Fim Profile Card -->
<br>
<br>

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
 

