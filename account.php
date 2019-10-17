<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sua Conta</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
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

<style>

  html
  {
    background: center top no-repeat rgb(34, 34, 34);
    background-image: linear-gradient(rgba(0, 255, 75, 0.16) 5%, rgba(72, 94, 42, 0) 70%);
  }

  body 
  {
    font-family: 'Titillium Web', sans-serif;
    margin: 0;
  }

  h1, h2, h3, h4, h5, h6 
  {
    font-family: 'Titillium Web', sans-serif;
    font-weight: 400;
    margin: 10px 0;
    color: #FFFFFF;
  }

  h1:hover
  {
    color: #9df588;
    transition: 0.8s;
    cursor: pointer;
  }

  p 
  {
    font-family: 'Titillium Web', sans-serif;
    color: #888;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
  }

  .overlay 
  {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 2;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
  }

  .overlay-content 
  {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
  }

  .overlay a 
  {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }

  .overlay a:hover, .overlay a:focus 
  {
    color: #f1f1f1;
    transition: 0.4s;
  }

  .overlay .closebtn 
  {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
  }

  @media screen and (max-height: 450px) 
  {
    .overlay {overflow-y: auto;
    }
    .overlay a {font-size: 20px
    }
    .overlay .closebtn 
    {
    font-size: 40px;
    top: 15px;
    right: 35px;
    }
  }

  .openbtn 
  {
    font-size: 10px;
    cursor: pointer;
    background-color: #3333332e;
    color: white;
    border: none;
    border-radius: -15px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-right: 8px;
    margin-left: 8px;
    width: 35px;
    padding: 3px 0px;
  }

  @media screen and (max-width: 600px) 
  {
    .openbtn 
    {
      position: relative;
      float: left;
      left: 48%;
      display: block;
      margin-bottom: 20px;
    }
  }

  .openbtn:hover {
    background-color: #44444487;
    color: #99ffa9;
    transition: 0.5s;
  }

/* Menu Rodrigo */
  ul.topnav 
  {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    height: 55px;
    border-bottom: inset 1.5px;
    border-bottom-color: #5efb60;
  }

  ul.topnav li 
  {
    float: left;
  }

  ul.topnav li a 
  {
    display: block;
    color: white;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;
  }
  /* hober button menu 
  ul.topnav li a:hover:not(.active) 
  {
    background-color: #36515d;
  }
  */

  ul.topnav li a.active 
  {
    background-color: #3b6679;
  }

  ul.topnav li.right 
  {
    float: right;
  }

  @media screen and (max-width: 600px) 
  {
    ul.topnav li.right, ul.topnav li a
    {
      position: relative;
      float: left;
      left: 48%;
    }
  }
      
  ul.topnav 
  {
    list-style-type: none;
    margin: 0;
    padding-bottom: 0;
    overflow: hidden;
    background-color: #333;
  }

  ul.topnav li 
  {
    float: left;
  }

  ul.topnav li a 
  {
    display: block;
    color: white;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;
  }

  /* hover button menu 
  ul.topnav li a:hover:not(.active) 
  {
    background-color: #36515d;
  }
  */

  ul.topnav li a:hover
  {
    color: #31c43f;
    transition: 0.4s;
  }

  ul.topnav li a.active 
  {
    background-color: #3b6679;
  }

  ul.topnav li.right 
  {
    float: right;
  }

  @media screen and (max-width: 600px) 
  {
    ul.topnav li.right, ul.topnav li 
    {
      float: none;
    }
  }

  .logo 
  {
    height: 52px;
    width: 77px;
    position: absolute;
    margin: 0% 47% 0% 47%;
    border-radius: 10px;
    cursor: pointer;
  }
  img
  {
    vertical-align: middle;
    border-style: none;
    width: 100%;
  }

  @media screen and (max-width: 600px)
  {
    .logo
    {
      display: none;
    }
  }
/* Fim Menu Rodrigo*/

/* Card */
  .AWP
  {
    vertical-align: middle;
    z-index: 1;
    height: auto;
    padding-top: 2rem;
    
  }

  .card 
  {
    width: 300px;
    height: auto;
    margin-bottom: none;
    text-align: center;
    font-family: 'Titillium Web', sans-serif;
    background: #111;
    float:left;
    margin-left: 40%;
    position: relative;
    margin-bottom: 30px;
    margin: 1% 44% 1% 41%;
  }

  #card1:hover  
  {
    box-shadow: 0 5px 18px 15px #00ff5730;
    transition: 0.3s;
    border-radius:10px;
  }

  .price 
  {
    color: #2fb531;
    font-size: 22px;
  }

  .card button 
  {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #3131315c;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    margin-bottom: -6%;
    border-bottom: 1px solid #2fb531;
  }

  .card button:hover 
  {
    opacity: 0.7;
    transition: 0.5s;
    color: #8cff8d;
  }

  
  /* Fim card */

  @media screen and (max-width: 1891px)
  {
    .card 
    {
      float: left;
      margin: 1% 44% 1% 41%;
    }
  }  
  
  .cont 
  {
    clear:both;
    display: block;
    position: relative;
    padding-top: 3px;
    padding-bottom: 3px;
    padding-right: 20px;
    padding-left: 20px;
    text-align: center;
    background-color: #42424252;
    border-bottom: inset 1px;
    border-bottom-color: #5efb60;
    margin-top: -80px;
}

  .categorias
  {
    border:2px green;
    border-radius:5px;
    box-shadow: 0 4px 4px 0 white;
    position:absolute;

  }

  footer
  {
    background-color: #1b1b1b;
    height: 100px;
    border-bottom: inset 1px;
    border-bottom-color: #5efb60;
    clear:both;
  }

  footer p
  {
    text-align: center;
  }

  .logoF
  {
    display: block;
    height: 52px;
    width: 77px;
    position: absolute;
    margin: 2% 47% 0% 47%;
    border-radius: 10px;
  }

  @media screen and (max-width: 1160px)
  {
    .logoF
    {
      display: block;
      height: 52px;
      width: 77px;
      position: absolute;
      margin: 4% 47% 0% 47%;
      border-radius: 10px;
    }
  }

  @media screen and (max-width: 700px)
  {
    .logoF
    {
      display: block;
      height: 52px;
      width: 77px;
      position: absolute;
      margin: 10% 47% 0% 47%;
      border-radius: 10px;
    }
  }

  @media screen and (max-width: 660px)
  {
    .logoF
    {
      display: none;
    }
  }

  @media screen and (max-width: 480px)
  {
    .logoF
    {
      display: none;
    }
  }
</style>

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
 

