<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sua Conta</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<<<<<<< Updated upstream
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Seleção -->
  <style type="text/css">
    ::selection{background:rgba(157, 255, 159, 0.84);}
    ::-webkit-selection{background:rgba(157, 255, 159, 0.84);}
    ::-moz-selection{background:rgba(157, 255, 159, 0.84);}
=======
<link rel="stylesheet" type="text/css" href="css/style.css">
>>>>>>> Stashed changes


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
    <a href="homee.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
      <button class="openbtn" onclick="openNav()"><img src="img/12.png" alt="1" width="30px" height="30px"> </button>  
      <li class="right"><a href="account.php">Conta</a></li>
      <!-- PHP -->
      <?php
      session_start();
      include_once("conexao.php");

         $sql = "SELECT * FROM usuarios;"; // sql para obter os dados que quer apresentar
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
          //echo "<pre>";
      //var_dump($row);
      //echo "</pre>";
  
      $nome = $row["nome"];
      $usuario = $row["usuario"];
      $email = $row['email'];
      
      

      
      // echo "<tr>";
      // echo "<td>$id</td>";
      // echo "<td>$nome</td>";
      // echo "<td>$email</td>";
      // echo "<td>$usuario</td>";
      // echo "<td>$senha</td>";
      // echo "</tr>";
      
    
        $_SESSION["nome"] = $nome;
        echo $nome;
                
        $_SESSION["usuario"] = $usuario;
        echo  $usuario;

        $_SESSION["email"] = $email;
        echo $email;
        }

        
      ?>
      <!-- FIM PHP -->
    </ul>
  
<!-- FIM/Menu -->

<!-- Profile Card -->
<div class="AWP">
  <div class="card" id="card1">
 
   <h4>E-mail:</h4>
    <a><h3><?php $email = $_SESSION["email"]; echo "$email"; ?></h3></a><br>
    <h4>ID:</h4>
    <a><h1><?php $nome = $_SESSION["nome"]; echo "$nome"; ?></h1></a><br>
    <h4>Usuario:</h4>
    <a><h1><?php $usuario = $_SESSION["usuario"]; echo "$usuario"; ?></h1></a><br>
    <p class="price">Hydra Profile</p>
    <p>Altere Suas Informações</p>
    <a href="editaccount.php"><p><button>Editar Perfil</button></p></a>
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
 

