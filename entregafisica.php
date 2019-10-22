<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/cadastro.js"></script>
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

<style type="text/css">

    * {
    box-sizing: border-box;
    }

    .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
    }

    .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    }

    .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
    }

    .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
    padding: 0 16px;
    }

    .containerV {
    background-color: #1c1c1c;
    padding: 5px 20px 15px 20px;
    border: 1px solid black;
    border-radius: 3px;
    }

    .inputV[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }

    .labelV {
    margin-bottom: 10px;
    display: block;
    }

    .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
    }

    .h1, b
    {
    color: #f1f1f1;
        text-align: center;
        margin-top: 0px;
    }

    .btnV {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    }

    .btnV:hover {
    background-color: #45a049;
    }

    a {
    color: #2196F3;
    }

    hr {
    border: 1px solid lightgrey;
    }

    span.price {
    float: right;
    color: grey;
    }

    @media (max-width: 800px) {
    .row {
        flex-direction: column-reverse;
    }
    .col-25 {
        margin-bottom: 20px;
    }
    }
    html
    {
        background: url(/public/images/v6/colored_body_top2.png?v=2) center top no-repeat #222222;
    }

    .tc 
    {
        background: linear-gradient( to bottom, #365d3d 5%, rgba(72, 94, 42, 0) 70%);
    }

    body
    {
        font-family: 'Titillium Web', sans-serif;
        display: block;
        margin: 0;
    }

    h1, b
    {
        color: #f1f1f1;
        text-align: center; 
        margin-top: 0px;
    }

    h1
    {
        font-size: 25px;
    }

    h2
    {
        color: #ffffff;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 35px;
    }

    ul.topnav 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        height: 55px;
        border-bottom: inset 1px;
        border-bottom-color: #155916;
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
        margin: 0% 40% 0% 38%;
        border-radius: 10px;
        cursor: pointer;
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
    
    .caixa1, .caixa2, .caixa3
    {
        position: relative;
        display: block;
        align-content: center;
        justify-content: space-between;
        padding: .5rem 1rem;
        padding-top: 0.5rem;
        padding-right: 1rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;

    }

    input
    {
        padding: 10px;
        margin: 5px 0 22px 0;
        border-radius: 5px;
        background: #f1f1f1;
        text-align: center;
        border-bottom-style: groove !important;
        border-top: hidden;
        border-left: hidden;
        border-right: hidden;
        border-bottom-color: rgba(0, 255, 11, 0.64) !important;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus 
    {
        background-color: rgba(157, 255, 159, 0.84) !important;
        outline: none;
        border-bottom-style: groove !important;
        border-top: hidden;
        border-left: hidden;
        border-right: hidden;
        border-bottom-color: rgba(0, 255, 11, 0.64) !important;
    }

    fieldset  
    {
        margin: 0% 30% 0% 30%;
        border-radius: 5px;
        position: inherit;
        justify-content: space-between;
        display: flex;
        text-align: -webkit-center;
        padding-block-start: 0;
        padding-inline-start: 0;
        padding-inline-end: 0;
        padding-block-end: 0;
        border-color: #1918183d !important;
    }

    fieldset :hover
    {
        box-shadow: 3px 4px 20px 1px rgba(0, 0, 0, 0.67);
        transition: 0.8s;
    }
    
    b:hover{
        border: none;
        box-shadow: none;
    }

    .btnS
    {

    }

    .btnR
    {
        background-color: #111;
        color: white;
        padding: 0.7rem 1.3rem;
        border-radius: 5px;
        opacity: 0.9;
        cursor: pointer;
        border-bottom-color: rgba(107, 255, 110, 0.9);
        border-bottom-style: groove;
        border-top: hidden;
        border-left-style: hidden;
        border-right-style: hidden;
        display: block;
        align-content: center;
        justify-content: space-between;
        position: absolute;
        margin: 0% 36% 0% 36%;
    }

    .btnE
    {
        background-color: #111;
        color: white;
        padding: 0.7rem 1.3rem;
        border-radius: 5px;
        opacity: 0.9;
        cursor: pointer;
        border-bottom-color: rgba(107, 255, 110, 0.9);
        border-bottom-style: groove;
        border-top: hidden;
        border-left-style: hidden;
        border-right-style: hidden;
        display: block;
        align-content: center;
        justify-content: space-between;
        position: absolute;
        margin: 0% 49% 0% 47%;
    }

    .btnS p:hover .btnR
    {
        background-color: rgba(87, 152, 88, 0.9);
        transition: 0.8s;
    }

    .btnS p:hover .btnE
    {
        background-color: rgba(87, 152, 88, 0.9);
        transition: 0.8s;
    }

    footer
  {
    background-color: #1b1b1b;
    height: 100px;
    border-bottom: inset 1px;
    border-bottom-color: #5efb60;
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
      margin: 3% 47% 0% 47%;
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

  h3, h4, p
  {
      color: #e3e3e3;
  }
</style>
    
</head>
<body>

    <!-- Menu -->
        <ul class="topnav">
        <a href="home.php"><img style="vertical-align: middle;" class="logo" src="img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="suport.php">Suporte</a></li>
            <li class="right"><a href="login.php">Login</a></li>
        </ul>
     <!-- FIM/menu -->

     <h2 style="margin: 20px;">Informe seus dados para efetuar a compra</h2>
<div class="row">

  <div class="col-75">
    <div class="containerV">
      <form action="homee.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Informações Pessoais</h3>
            <label class="labelV" for="fname" style="color: #e3e3e3;"><i class="fa fa-user"></i> Nome Completo</label>
            <input class="inputV" type="text" id="fname" name="firstname" placeholder="Insira seu nome">
            <label class="labelV" for="email" style="color: #e3e3e3;"><i class="fa fa-envelope"></i> E-mail</label>
            <input class="inputV" type="text" id="email" name="email" placeholder="ifsp@exemplo.com">
            <label class="labelV" for="adr" style="color: #e3e3e3;"><i class="fa fa-address-card-o"></i> Endereço</label>
            <input class="inputV" type="text" id="adr" name="address" placeholder="Rua 14, Número 93, Martim">
            <label class="labelV" for="city" style="color: #e3e3e3;"><i class="fa fa-institution"></i> Cidade</label>
            <input class="inputV" type="text" id="city" name="city" placeholder="Caraguatatuba">

            <div class="row">
              <div class="col-50">
                <label class="labelV" for="state" style="color: #e3e3e3;">Estado</label>
                <input class="inputV" type="text" id="state" name="state" placeholder="SP">
              </div>
              <div class="col-50">
                <label class="labelV" for="zip" style="color: #e3e3e3;">CEP</label>
                <input class="inputV" type="text" id="zip" name="zip" placeholder="12345-678">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Pagamento</h3>
            <label class="labelV" for="fname" style="color: #e3e3e3;">Cartões Aceitáveis</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label class="labelV" for="cname" style="color: #e3e3e3;">Nome no cartão</label>
            <input class="inputV" type="text" id="cname" name="cardname" placeholder="Cleitu Rasta">
            <label class="labelV" for="ccnum" style="color: #e3e3e3;">Número do cartão de crédito</label>
            <input class="inputV" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label class="labelV" for="expmonth" style="color: #e3e3e3;">Mês de expiração do cartão</label>
            <input class="inputV" type="text" id="expmonth" name="expmonth" placeholder="Dezembro">
            <div class="row">
              <div class="col-50">
                <label class="labelV" for="expyear" style="color: #e3e3e3;">Ano de Expiração</label>
                <input class="inputV" type="text" id="expyear" name="expyear" placeholder="2028">
              </div>
              <div class="col-50">
                <label class="labelV" for="cvv" style="color: #e3e3e3;">Código de Segurança</label>
                <input class="inputV" type="text" id="cvv" name="cvv" placeholder="012">
              </div>
            </div>
          </div>
          
        </div>
        
        
    </div>
  </div>
  <div class="col-25">
    <div class="containerV" >
    
      <h4>Carrinho <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Produto 1</a> <span class="price">R$150</span></p>
      <p><a href="#">Produto 2</a> <span class="price">R$36</span></p>
      <p><a href="#">Produto 3</a> <span class="price">R$59</span></p>
      <p><a href="#">Produto 4</a> <span class="price">R$199</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>R$444</b></span></p>
    </div>
  </div>
</div>

<div class="col-25" >
    <div class="containerV" style="
    margin: -15% -1% 0% 76.9%;">
    
    <label for="nome" style="box-shadow: none !important;"><b>Escolha o Jogo</b></label><br>
            <input type="text" name="nome" placeholder="Jogo" id="nome" style=" box-shadow: none !important;">
                <br>
                <br>
            <label for="nome" style="box-shadow: none !important;"><b>Escolha a Quantidade</b></label><br>
            <input type="text" name="nome" placeholder="Quantidade" id="nome" style=" box-shadow: none !important;">
                <br>
                <br>   
              </div>
            </div>
      
  </div>


    <!-- botões -->
        <div class="btnS">
            
            <p><button class="btnE" type="submit" name="btnCadUsuario">Enviar</button></p>
        
        </form>
        </div>
        <br>
        <br>
    </div>
    <!-- FIM/botões -->

    <!-- Footer -->
    <footer>
    <img src="img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
    </footer>
    <!-- FIM/footer -->

    
</body>
</html>

