<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
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
    
</style>

</head>
<body>
<?php
if( isset($_COOKIE) ) {
    
    $cookie = $_COOKIE["detalhes_compra"];
    
    $arr = json_decode($cookie,true);
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
    
}
?>

<table>
        <tr>
            <th>Detalhes</th>
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
