<?php


$arr = array();

if( isset($_COOKIE["detalhes_compra"]) ) {
    $cookie = $_COOKIE["detalhes_compra"];
    
    $arr = json_decode($cookie,true);
}
    $imagem=$_POST['imagem'];
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];

    /*
    $dados = array(
        array(
            "nome" =>$nome,
            "preco"=>$preco
        )       
    );
    */

    $arr[] = array(
        "imagem" =>$imagem,
        "nome" =>$nome,
        "preco"=>$preco
    );

$detalhes_cookie = "detalhes_compra";
$dt_expiracao = time() + 86400;

setcookie($detalhes_cookie, json_encode($arr), $dt_expiracao);

header("Location: carofthecompres.php")


?>