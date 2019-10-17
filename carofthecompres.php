<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carrinho de Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

  *
  {
    text-decoration: none !important;
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
    

    table, td, th {    
    border: 1px solid #94949452;
    text-align: left;
    border-radius: 5px;
    background-color: #00000036;
    color: #f1f1f1;
    box-shadow: 5px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 15px;
    }

.card {
  box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  position: absolute;
  left: 1020px;
}

.card2 {
  box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  position: absolute;
  left: 590px;
}

img{
    max-width: 200px;
    max-height: 200px;
}

img:hover{
    cursor: pointer;
    background-color: red 0.8s;
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
    margin: 1% 41.3% 1% 41.3%;
  }

  a
  {
    color: white;
    text-decoration: none;
    text-align: center;
  }
    
</style>

</head>
<body>
<?php
if( isset($_COOKIE) ) {
    
    $cookie = $_COOKIE["detalhes_compra"];
    
    $arr = json_decode($cookie,true);
    echo "<pre>";
    echo "</pre>";
    
}
?>
<a href="homee.php"><button onclick="compra()" class="btnn">Efetuar Compra</button></a>
<script>
        function compra() {
        alert("Seu Produto Será Entregue Diretamente No Seu E-mail Informado Em Seu Cadastro!!                                                                                  Obrigado Por Comprar Em Hydra Games!");
}
</script>
<table>
        <tr>
            <th>Imagem do Produto</th>
            <th>Nome</th>
            <th>Preço da Unidade</th>
        </tr>
<?php
foreach($arr as $produto){
    echo "<tr>";
    echo "<td> <img width='500' src=".$produto["imagem"]."></td>";
    echo "<td>".$produto["nome"]."</td>";
    echo "<td>".$produto["preco"]."</td>";
    echo "</tr>";

}


?>
        
</table>
