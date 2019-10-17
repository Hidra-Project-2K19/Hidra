<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Tom Clancy's Rainbow Six Siege's </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
<head>
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
    background-image: linear-gradient(rgba(0, 255, 75, 0.16) 5%, rgba(72, 94, 42, 0) 30%);
  }

  body 
  {
    font-family: 'Titillium Web', sans-serif;
    margin: 0;
  }

/* menu */
  ul.topnav 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        height: 55px;
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

    ul.topnav li a:hover:not(.active) 
    {
        background-color: rgba(74, 255, 128, 0.42);
        transition: 0.8s;
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
    
    ul.topnav 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
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

    ul.topnav li a:hover:not(.active) 
    {
      background-color: rgba(74, 255, 128, 0.42);
      transition: 0.8s;
    }

    ul.topnav li a.active 
    {
        background-color: rgb(48, 86, 39);
        padding: 14px 16px;
    }
    
    ul.topnav li a.active:hover
    {
      background-color: rgba(74, 255, 128, 0.42);
      transition: 0.8s;
    }

    ul.topnav li.right 
    {
        float: right;
    }

    @media screen and (max-width: 600px) 
    {
        ul.topnav li.right, ul.topnav li 
        {
            float: unset;
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

    .logo:hover
    {
      image: url("img/WHITE-GREEN-HYDRA.png");
      transition: 1.0s;
    }

    img
    {
        vertical-align: middle;
        border-style: none;
    }

    @media screen and (max-width: 600px)
    {
        .logo
        {
            display: none;
        }
    }
  /* fim menu */


*{
  margin:0;
 
}
.parallax 
{
  
  background-image: url("img/rainbow1.jpg");
  min-height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 
{
  background-image: url("img/rainbow2.jpg");
  min-height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



.boxtext
{
  padding: 50px 50px;
  color:white;
  background: center top no-repeat rgb(34, 34, 34);
  background-image: linear-gradient(rgba(0, 255, 75, 0.16) 5%, rgba(72, 94, 42, 0) 30%);
  text-align: center
}
.ti
{
  font-size:23px;
  text-align:center;
}

.ti2 
{
  vertical-align: middle;
  background-color: #191919;
  border-bottom-style: groove;
  border-top-style: hidden;
  border-left-style: hidden;
  border-right-style: hidden;
  border-bottom-color: #60ff62;
  padding: 1% 3%;
  border-radius: 5px;
  position: relative;
  display: -webkit-inline-box;
  cursor: pointer;
  color: white;
  margin-top: 40px;
}

.ti2:hover  
{
  background-color: rgba(87, 152, 88, 0.9);
  transition: 0.8s;
}


/* Footer */
footer
  {
    background-color: #1b1b1b;
    height: 100px;
    border-bottom: inset 1px;
    border-bottom-color: #5efb60;
  }

  footer p
  {
    text-align: center;
    color: #888;
  }

  .logoF
  {
    display: block;
    height: 52px;
    width: 77px;
    position: absolute;
    margin: 3% 47% 0% 47%;
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
/* Fim Footer */


</style>
</head>
<body>

<!-- Menu -->
<ul class="topnav">
<a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Voltar</a></li>
            <li class="right"><a href="account.php">Conta</a></li>
        </ul>
     <!-- FIM/menu -->



<div class="parallax"></div>

<div class="boxtext">
    <h1>Caracteristicas gerais<h1>
    <hr>

    <h2 class="ti">Domine a arte da destruição e do uso de gadgets em Tom Clancy’s Rainbow Six Siege. Enfrente combates intensos em curta distância, alta letalidade, decisões táticas, jogabilidade em equipe e ação explosiva a todo momento. Vivencie uma nova era de tiroteios ferozes e estratégia de alto nível nascida do grande legado dos jogos de Tom Clancy's Rainbow Six passados.<h2>
</div>

<div class="parallax2"></div>

<div class="boxtext">
    <h1>Caracteristicas gerais<h1>
    <hr>

    <h2 class="ti">MÍNIMOS:
SO: Windows 7, Windows 8.1, Windows 10 (64bit versions required)
Processador: Intel Core i3 560 @ 3.3 GHz or AMD Phenom II X4 945 @ 3.0 GHz
Memória: 6 GB de RAM
Placa de vídeo: NVIDIA GeForce GTX 460 or AMD Radeon HD 5870 (DirectX-11 compliant with 1GB of VRAM)
Rede: Conexão de internet banda larga
Armazenamento: 61 GB de espaço disponível
Placa de som: DirectX® 9.0c compatible sound card with latest drivers
<br>
<br>
RECOMENDADOS:
SO: Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions required)
Processador: Intel Core i5-2500K @ 3.3 GHz or better or AMD FX-8120 @ 3.1 Ghz or better
Memória: 8 GB de RAM
Placa de vídeo: NVIDIA GeForce GTX 670 (or GTX 760 / GTX 960) or AMD Radeon HD 7970 (or R9 280x [2GB VRAM] / R9 380 / Fury X)
Rede: Conexão de internet banda larga
Armazenamento: 61 GB de espaço disponível
Placa de som: DirectX® 9.0c compatible sound card 5.1 with latest drivers<h2>
  <a href="https://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/?curator_clanid=27270161"><button class="ti2" style="vertical-align:middle">Baixar</button></a>
</div>

<!-- Footer -->
<footer>
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>
    <!-- FIM/footer -->


</body>
</html>