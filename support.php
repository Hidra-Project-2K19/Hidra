<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Suporte </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">

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
    background-image: linear-gradient(rgba(0, 255, 75, 0.16) 5%, rgba(72, 94, 42, 0) 100%);
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


  h2, h1, b 
  {
      color: #f1f1f1;
      text-align: center;
  }

  h2
  {
    padding-top: 15px;
    margin: 0;
  }

  h2:hover, h1:hover, b:hover
  {
    color: #479d4b;
    transition: 0.8s;
  }

  * 
  {
    box-sizing: border-box;
  }
  
  .bg-img 
  {
    /* The image used */
    background-image: url("img/LR-back.png");
    min-height: 500px;
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  
  /* Add styles to the form container */
  .container 
  {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-image: rgb(161, 161, 161);
    position: relative;
    margin: 0% 43% 0% 43%;
    padding-top: 40px;
  }
  
  /* Full-width input fields */
  input[type=text], input[type=password] 
  {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border-radius: 5px;
    background: #f1f1f1;
    text-align: center;
    border-bottom-style: groove;
    border-top: hidden;
    border-left: hidden;
    border-right: hidden;
    border-bottom-color: rgba(0, 255, 11, 0.64);
  }
  
  input[type=text]:focus, input[type=password]:focus 
  {
    background-color: rgba(157, 255, 159, 0.84) !important;
    outline: none;
    border-bottom-style: groove;
    border-top: hidden;
    border-left: hidden;
    border-right: hidden;
    border-bottom-color: rgba(0, 255, 11, 0.64);
    transition: 0.8s;
  }
  
  /* Set a style for the submit button */
  .btn 
  {
    background-color: #111;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
    border-bottom-color: rgba(0, 255, 11, 0.64);
    border-bottom-style: groove;
    border-top: hidden;
    border-left: hidden;
    border-right: hidden;
    position: relative;
    float: left;
    left: 23%;
    transition: 0.5s;
  }
  
  .btn:hover 
  {
    opacity: 1;
  }

  .btnn:hover
  {
    box-shadow: 3px 4px 20px 1px rgba(0, 0, 0, 0.67);
    transition: 0.8s;
  }

  .btnn
  {
    background-color: #111;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    width: 16%;
    opacity: 0.9;
    cursor: pointer;
    border-bottom-color: rgba(0, 255, 11, 0.64);
    border-bottom-style: groove;
    border-top: hidden;
    border-left-style: hidden;
    border-right-style: hidden;
    position: relative;
    left: 42%;
    margin-top: 15px;
  }

  a
  {
    color: white;
    text-decoration: none;
    text-align: center;
  }

  footer
  {
    background-color: #1b1b1b;
    height: 100px;
    border-bottom: inset 1px;
    border-bottom-color: #5efb60;
    margin: 18% 0% 0% 0%;
  }

  footer p
  {
    padding-top: 10px;
    text-align: center;
    color: #9c9c9c;
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

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin: -5% 15% 8% -8%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.contato{
  text-align:center;
  font-size:20px;
  color:#f1f1f1;
}
</style>

</head>
<body>
<!-- Menu -->
<ul class="topnav">
<a href="homee.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="homee.php">Home</a></li>
            <li><a href="account.php">Conta</a></li>
            <li><a href="support.php">Suporte</a></li>
            <li class="right"><a href="cadastro.php">Cadastro</a></li>
        </ul>
     <!-- FIM/menu -->
        <div class="bg-img">
        <h2>Entre Com Uma Conta Existente</h2>
        <form method="POST" enctype="multipart/form-data" action="sup.php" class="container">
            <h1>Mensagens de Suporte</h1>
            <div class="row" style="clear: both;">
      <div class="col-25">
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
</div>
            
            <button onclick="sup()" type="submit" class="btn"><a>ENVIAR</button></a>
            <script>
        function sup() {
        alert("Sua Mensagem Foi Enviada Ao Nosso Suporte e Central De Ajuda ao Usuário!   Obrigado Pela Compreensão e Ajuda com o Site!");
}
</script>
        </form>
        </div>
<div class="contato">
<p style="position: absolute; margin: 20% 1% 5% 1%;     color: #9c9c9c;">Telefones: (12)982046317/(12)996365115 <p>
<p style="position: absolute; margin: 20% 1% 19% 73%;    color: #9c9c9c;">E-mail: igorluis0107@gmai.com/edgesleekth@gmail.com</p>
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
