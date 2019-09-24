<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}

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

    </style>
</head>
<body>  
        <img src="img/HeadSet.jpg" alt="Siberia V3 Gaming" >
        <h2>Head Set Siberia V3 Gaming</h2>
        <p>Fones de Ouvido de Altissima Qualidade 7.1.</p>

        <table>
        <tr>
            <th>Detalhes</th>
            <th>Preço da Unidade</th>
            <th>Total a Pagar</th>
        </tr>
        <tr>
            <td>Sensibilidade: 80 dB. Sensibilidade: -42 dB.</td>
            <td>R$ 550.00</td>
            <td>R$ 550.00</td>
        </tr>
        <tr>
            <td>Driver: neodímio de 50mm.</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Peso (g): 760.00</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Cor</td>
            <td>Branco</td>
            <td>Preto</td>
        </tr>
        </table>
     <form action="final.php" method="POST">
     <button class="button">comprar</button></a>   
    </form>

    <form action="criar.php" method="POST">
    <input type="hidden" name="nome" value="Siberia V3 Gaming">
    <input type="hidden" name="preco" value="500+">
    <input type="hidden" name="imagem" value="img/HeadSet.jpg" />

    <input type="submit" value="Adicionar carrinho" class="button">  
    </form>
</body>
</html>