<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Jogos de Ação </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

  .overlay #hydrass
  {
    color: #39bd7a;
    position: relative;
    margin: 1% 45% 10% 45%;
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

/* Slides */
  .slide
  {
    display: block;
    position: relative;
  }

  * 
  {
    box-sizing:border-box
  }

  .mySlides 
  {
    display:none;
    }

  .w3-badge
  {
    height:13px;width:13px;
    padding:0px;
    color: #31c43f;
  }

  * 
  {
    box-sizing: border-box;
  }

  .w3-right, .w3-left, .w3-hover-text-khaki 
  {
    color: #FFF;
    cursor: pointer;
  }

  .w3-text-khaki, .w3-hover-text-khaki:hover 
  {
    color: #31c43f!important;
  }

  /* Float four columns side by side */
  .column 
  {
    float: left;
    width: 25%;
    padding: 0 10px;
  }

  /* Remove extra left and right margins, due to padding */
  .row 
  {
    margin: 0 -5px;
  }

  /* Clear floats after the columns */
  .row:after 
  {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive columns */
  @media screen and (max-width: 600px)
   {
    .column 
    {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
  }
/* Fim Slides */


  .button 
  {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: darkgreen;
    background-color: black;
    text-align: center;
    cursor: pointer;
    width: 80px;
    height: 40px;
    font-size: 18px;
    transition: all 0.5s;
    position: absolute;
    left: 1150px;
    border-radius: 10px;  
  }

  .button span 
  {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after 
  {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button:hover span 
  {
    padding-right: 25px;
    transition: 0.4s;
  }

  .button:hover span:after 
  {
    opacity: 1;
    right: 0;
    transition: 0.4s;
  }

  /* Fim Slide */
  
  /* Genero */
  .contclas
  {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #131313;
    height: 150px;
    border-bottom: inset 1.5px;
    border-bottom-color: #5efb60;
    
    
  }
  .contclascenter
  {
    text-align:center;
    
  }
  .btcat
  {
    float:left;
    margin-left:8%;
    text-decoration:none;
    
  }
  @media screen and (max-width: 1450px) 
  {
    .contclas
    {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #131313;
      height: 200px;
      border-bottom: inset 1.5px;
      border-bottom-color: #5efb60;
      
    }
  }

  .contclas h2:hover
  {
    color: #31c43f;
  }

  /* Fim Genero */

/* Card */
  .AWP
  {
    vertical-align: middle;
    z-index: 1;
    height: 1210px;
  }


  .card 
  {
    width: 300px;
    height: auto;
    margin: 0px;
    margin-bottom: none;
    text-align: center;
    font-family: 'Titillium Web', sans-serif;
    background: #111;
    margin-top: 30px;
    position: relative;
    margin: 1% 5% 1% 4%;
    justify-content: space-between;
    float: left;
  }

  #card1:hover , #card2:hover , #card3:hover , #card4:hover, #card5:hover, #card6:hover, #card7:hover, #card8:hover, #card9:hover, #card10:hover, #card11:hover, #card12:hover, #card13:hover, #card14:hover, #card15:hover, #card16:hover
  {
    box-shadow: 0 5px 18px 15px #00ff5730;
    transition: 0.3s;
    border-radius:10px;
  }

  @media screen and (max-width: 1891px)
  {
    .card
    {
      float: left;
      margin: 1% 8% 1% 8%;
    }
  }

  @media screen and (max-width: 1747px)
  {
    .card
    {
      float: left;
      margin: 1% 8% 1% 18.7%;
    }
  }

  @media screen and (max-width: 1680px)
  {
    .card
    {
      float: left;
      margin: 1% 1.5% 1% 4.7%;
    }
  }

  @media screen and (max-width: 1600px)
  {
    .card
    {
      float: left;
      margin: 1% 4.3% 1% 1.75%;
    }
  }

  @media screen and (max-width: 1441px)
  {
    .card
    {
      float: left;
      margin: 1% 1% 1% 2.7%;
    }
  }
  @media screen and (max-width: 1366px)
  {
    .card
    {
      float: left;
      margin: 1% 1% 1% 1.7%;
    }
  }

  @media screen and (max-width: 1304px) 
  {
    .card
    {
      float: left;
      margin: 1% 8% 1% 15.7% !important;
    }
  }

  @media screen and (max-width: 1157px)
  {
    .card
    {
      float: left;
      margin: 1% 8% 1% 10% !important;
    }
  }

  @media screen and (max-width: 954px)
  {
    .card
    {
      float: left;
      margin: 1% 10% 1% 35% !important;
    }
  }

  @media screen and (max-width: 680px)
  {
    .card
    {
      float: left;
      margin: 1% 10% 1% 25% !important;
    }
  }

  @media screen and (max-width: 535px)
  {
    .card
    {
      float: left;
      margin: 1% 10% 1% 20% !important;
    }
  }

  @media screen and (max-width: 484px)
  {
    .card
    {
      float: left;
      margin: 1% 10% 1% 17% !important;
    }
  }

  @media screen and (max-width: 280px)
  {
    .card
    {
      float: left;
      margin: 1% 5% 1% 0% !important;
    }
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
  .catjogo{
    color: #5efb60;
    font-size:100px;
    text-align:center;
    
  }
  .catconteiner{
    background-color: #10101052;
    border:none;
    margin:none;
    padding:none;
  }

  .container {
  width:100%;
  position: relative;
  height: 50px;
}

input {
  height: 45px;
  border: none;
  outline: none;
  padding-left: 50px;
  width: 0;
  position: absolute;
  top: 4px;
  left: 50px !important;
  background:#6d6d6d;
  z-index: 3;
  transition: width 1s ease-out;
  border-radius: 4px;
  cursor: pointer;
}
input:focus { 
  border: 1px solid #3ffb60;
  border-radius: 4px;
  width: 30%;
  z-index: 1;
  transition: width 1s ease-in;
  background: #6d6d6d;
}
.buscars { 
  height: 50px;
  width: 50px;
  background:  url('lupa.png')  center no-repeat;
  border: none;
  position: absolute;
  top: 2px;
  left: 470px;
  z-index: 2;
  cursor: pointer;
  overflow: hidden;
}
.buscars:focus {
  outline: none;
} 
/* esconde o LABEL "Buscar" */
 label {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;	
} 


label {display: block;}
  input, button {padding: 10px;}
  input {width: 30%;}


  li a, .dropbtn {
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a.dropbtn{
  position: absolute;
  padding: 16px 14px 15px;
  right: 10%;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;

  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  position: relative;
  color: black;
  padding: 12px 16px;
  padding: 16px 14px 15px 85%;
  text-decoration: none;
  display: block;
  background: #333;
}

.dropdown-content a:hover {background-color: #171717;}

.dropdown:hover .dropdown-content {
  display: block;
  right: 7%;
  top: 55px;
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
    <a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
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
<h1 class="catjogo">Ação</h1>
</div>

<!-- Cards -->
<div class="AWP">
<?php include_once("conexao.php");
            $result_cursos = "SELECT * FROM catacao";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
          ?>

          <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
          <div class="">
            <div class="card">
              <div class="card-image">
                <a href="PaginaVendaAcao.php?id_curso=<?php echo $rows_cursos['id']; ?>">
                <img src="img/<?php echo $rows_cursos['caminho_img']; ?>" alt="...">
                </a>
              </div>
              <div class="card-content">
                <p><?php echo $rows_cursos['precop']; ?></p>
              </div>

              <a href="editar.php?id=<?php echo $rows_cursos['id']; ?>" class="btn-floating orange "><i class="material-icons" style="color:white;">edit</i></a>
                <td><a href="#modal<?php echo $rows_cursos['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons" style="color:white;">delete</i></a></td>
              <div id="modal<?php echo $rows_cursos['id']; ?>" class="modal">
              <div class="modal-content">
                <p>Tem certeza que deseja excluir esse cliente?</p>
              </div>
              <div class="modal-footer">               

                <form action="deleteproduto.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $rows_cursos['id']; ?>">
                  <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

                   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

                </form>
                <div class="card-action">
                <a href="#">Adicionar ao carrinho</a>
              </div>
              </div>
            </div>
            </div>
          </div>
          <?php } ?>
  <div class="card" id="card1">
    <a href="caracteristicasGOD.php"><img src="img/godimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasGOD.php"><h1>God Of War PS4</h1></a>
    <p class="price">R$179.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card2">
    <a href="caracteristicasRL.php"><img src="img/rlimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasRL.php"><h1>Rocket League</h1></a>
    <p class="price">R$34.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card3">
    <a href="caracteristicasCSGO.php"><img src="img/csgoimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasCSGO.php"><h1>CS:GO</h1></a>
    <p class="price">GRÁTIS</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>BAIXAR</button></p>
  </div>

  <div class="card" id="card4">
  <a href="caracteristicasFTN.php"><img src="img/fortniteimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasFTN.php"><h1>Fortnite</h1></a>
    <p class="price">GRÁTIS</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>BAIXAR</button></p>
  </div>

  <div class="card" id="card5">
  <a href="caracteristicasACBF.php"><img src="img/ACblack.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
  <a href="caracteristicasACBF.php"><h1>AC Black Flag</h1></a>
    <p class="price">R$59.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card6">
    <a href="caracteristicasGTA.php"><img src="img/gtav.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasGTA.php"><h1>GTA V</h1></a>
    <p class="price">R$99.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card7">
    <a href="caracteristicasSKY.php"><img src="img/skyrim.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasSKY.php"><h1>TES V Skyrim</h1></a>
    <p class="price">R$39.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card8">
    <a href="caracteristicasH.php"><img src="img/halo4img.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasH.php"><h1>Halo 4</h1></a>
    <p class="price">R$24.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button href="">+ CARRINHO</button></p>
  </div>
</div>
<div class="AWP">
  <div class="card" id="card9">
    <a href="caracteristicasNEED.php"><img src="img/needforspeedimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasNEED.php"><h1>Need For Speed HP</h1></a>
    <p class="price">R$29.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button href=>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card10">
  <a href="caracteristicasJUST.php"><img src="img/just4img.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
  <a href="caracteristicasJUST.php"><h1>Just Cause 4</h1></a>
    <p class="price">R$69.99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card11">
    <a href="caracteristicasOUT.php"><img src="img/outimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasOUT.php"><h1>Outlast II</h1></a>
    <p class="price">R$57,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card13">
  <a href="caracteristicasMORTAL.php"><img src="img/mortal.png" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasMORTAL.php"><h1>Mortal Kombat 11</h1></a>
    <p class="price">R$199,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card14">
    <a href="caracteristicasRUST.php"><img src="img/rustimg.png" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasRUST.php"><h1>Rust</h1></a>
    <p class="price">R$65,99</p>
    <p>Disponível na Plataforma Hydra</p>
    <p><button>+ CARRINHO</button></p>
  </div>

  <div class="card" id="card15">
    <a href="caracteristicasRAINBOW.php"><img src="img/rainbowimg.jpg" alt="Denim Jeans" width="250px" height="300px"></a>
    <a href="caracteristicasRAINBOW.php"><h1> Rainbow Six® Siege</h1></a>
    <p class="price">R$59.99</p>
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