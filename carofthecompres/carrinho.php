<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>    
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

.title {
  color: grey;
  font-size: 18px;
}

button {
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

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.abc{
  text-align: center;
  font-size: 60px;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<h1 class="abc"> PRODRUTOS EM OFERTA </h1>
<div class="card">
  <img src="img/HeadSet.jpg" alt="Siberia V3 Gaming" style="width:100%">
  <h1>HeadSet Steelseries</h1>
  <p class="title">HeadSet Gamer de Qualidade Monstra!!
  Pode Comprar Tranquilo!</p>
  <p>Código: 1</p>
  <div style="margin: 24px 0;"> 
  </div>
  <form action="dados.php" method="POST">
  <p><button>Efetuar Compra Tranquila</button> </p>
  </form>
</div>

<div class="card2">
  <img src="img/MouseNaga.jpg" alt="Razer Naga Epic Chroma" style="width:100%">
  <h1>Razer Naga Epic Chroma</h1>
  <p class="title">Mouse Gamer de Qualidade Monstra!!
  Pode Comprar Tranquilo!</p>
  <p>Código: 2</p>
  <div style="margin: 24px 0;"> 
  </div>
  <form action="dados2.php" method="POST">
  <p><button>Efetuar Compra Tranquila</button> </p>
  </form>
</div>

</body>
</html>