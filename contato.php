<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Contate os Desenvolvedores </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
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
    text-decoration: none !important;
  }

  body 
  {
    font-family: 'Titillium Web', sans-serif;
    margin: 0;
    text-decoration: none !important;
  }

  *{
    text-decoration: none !important;
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
    color: #cecece;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    cursor: text;
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
  .oferta{
    color: #5efb60;
    font-size:100px;
    text-align:center;
  }
  .pessoa{
      text-align:center;
      background-color: #10101052;
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
    </ul>
  
<!-- FIM/Menu -->

<div class="pessoa">
<h1 class="tipessoa">TELEFONES<h1>
<p>(12)982046317/(12)996414197 <p>
</div>

<div class="pessoa">
<h1 class="tipessoa">E-MAIL <h1>
<p>hydrapjt@gmail.com<p>
</div>

<div class="pessoa">
<h1 class="tipessoa">ENDEREÇO<h1>
<p>Av. Bahia, 1739 - Indaiá, Caraguatatuba - SP, 11665-071<p>
</div>


  <footer>
  <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>    
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
</body>
</html>