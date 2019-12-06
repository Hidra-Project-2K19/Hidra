<!DOCTYPE html>
<html>
<head>
<title>Hydra Games</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Início </title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="assets/css/main.style.css" type="text/css" />
<link rel="stylesheet" href="print.css" type="text/css" media="print">

</head>
<body>
<!-- MenuBTN -->
   <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
      <a id="Hydrass" href="#" style="top: 2%;color: #39bd7a; margin: -8% 0% 8% 0%; /* margin-bottom: 4%; */">Hydra Games</a>
      <br>
      <a href="<?php echo BASE_URL; ?>login">Conta</a>
            <a href="<?php echo BASE_URL; ?>login">Carrinho</a>
            <a href="<?php echo BASE_URL; ?>help">Ajuda</a>
            <a href="<?php echo BASE_URL; ?>support">Suporte</a>
            <a href="<?php echo BASE_URL; ?>sobre">Sobre</a>
      </div>
    </div>
    <!-- FIM/MenuBTN -->

    <!-- Menu -->
    <ul class="topnav"></ul>
    <a href="<?php echo BASE_URL; ?>home.php"><img style="vertical-align: middle;" class="logo" src="assets/img/HYDRA-WHITEE.png" alt="Hydra Games"></a>
    <div class="search_area">
		<form action="<?php echo BASE_URL; ?>busca" method="GET">
			<input type="search" id="busca" name="s" style="left: 5%; color: #ffffff; position: fixed; z-index: 1; background-color: #333; border-radius: 0%;" value="<?php echo (!empty($viewData['searchTerm']))?$viewData['searchTerm']:''; ?>" required placeholder="<?php $this->lang->get('SEARCHFORANITEM'); ?>" />
			<input type="submit" value="" />
		</form>
	</div>
      <button class="openbtn" onclick="openNav()"><img src="assets/img/12.png" alt="1" width="30px" height="30px"> </button>  
      <a class="right" href="<?php echo BASE_URL; ?>login">Login</a></li>
      <a class="right" href="<?php echo BASE_URL; ?>login">Conta</a></li>
			<a class="right" href="<?php echo BASE_URL; ?>login">Adicionar</a></li>
      <li class="dropdown">
      <a href="#" style="" class="dropbtn">Categorias</a>
        <div style="vertical-align: right;" class="dropdown-content" >
          <a href="<?php echo BASE_URL; ?>catacao.php">Ação</a>
          <a href="<?php echo BASE_URL; ?>catindie.php">Indie</a>
          <a href="<?php echo BASE_URL; ?>catestrate.php">Estratégia</a>
          <a href="<?php echo BASE_URL; ?>catesportes.php">Esportes</a>
          <a href="<?php echo BASE_URL; ?>catbatle.php">Batle Royale</a>
          <a href="<?php echo BASE_URL; ?>catrpg.php">RPG</a>
          <a href="<?php echo BASE_URL; ?>catgratis.php">Gratuito</a>
        </div>
      </li>
    </ul>
<!-- FIM/Menu -->


<!-- Slide -->
<div class="slide">
  <div class="w3-content w3-display-container" style="max-width:100%; max-height: 100%;">
    <img class="mySlides" src="assets/img/fortnite.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <img class="mySlides" src="assets/img/csgo.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <img class="mySlides" src="assets/img/rocketleague.jpg" style="width: 100%; height: 90%; display: none; box-sizing: border-box;">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
      <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>
</div>
<!-- FIM/Slide -->
<?php
require 'cards.php';
?>



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

// Slide
  var slideIndex = 1;
    showDivs(slideIndex);

  function plusDivs(n) 
  {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) 
  {
    showDivs(slideIndex = n);
  }

  function showDivs(n) 
  {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-white";
  }
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); 
  }
  // Fim Slide
</script>
      
  <footer>
  <img src="<?php echo BASE_URL; ?>assets/img/HYDRA-WHITEE.png" class="logoF">
        <p>© 2019 Hydra Corporation. Todos os direitos reservados. Todas as marcas são propriedade dos deus respectivos donos nos EUA e em outros países.
        IVA incluso em todos os preços onde aplicável.</p>
  </footer>    
</body>
</html>

<!-- <!DOCTYPE html>
	<body>
		<nav class="navbar topnav">
			<div class="container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo BASE_URL; ?>"><?php $this->lang->get('HOME'); ?></a></li>
					<li><a href="<?php echo BASE_URL; ?>contact"><?php $this->lang->get('CONTACT'); ?></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $this->lang->get('LANGUAGE'); ?>
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASE_URL; ?>lang/set/en">English</a></li>
							<li><a href="<?php echo BASE_URL; ?>lang/set/pt-br">Português</a></li>
						</ul>
					</li>
					<li><a href="<?php echo BASE_URL; ?>login"><?php $this->lang->get('LOGIN'); ?></a></li>
				</ul>
			</div>
		</nav>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-2 logo">
						<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo.png" /></a>
					</div>
					<div class="col-sm-7">
						<div class="head_help">(12) 99636-5115</div>
						<div class="head_email">Hidrapjt@<span>gmail.com</span></div>
						
						<div class="search_area">
							<form action="<?php echo BASE_URL; ?>busca" method="GET">
								<input type="text" name="s" value="<?php echo (!empty($viewData['searchTerm']))?$viewData['searchTerm']:''; ?>" required placeholder="<?php $this->lang->get('SEARCHFORANITEM'); ?>" />
								<select name="category">

									<option value=""><?php $this->lang->get('ALLCATEGORIES'); ?></option>

									<?php foreach($viewData['categories'] as $cat): ?>
									<option <?php echo ($viewData['category']==$cat['id'])?'selected="selected"':''; ?> value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
						        	<?php
						        	if(count($cat['subs']) > 0) {
						        		$this->loadView('search_subcategory', array(
						        			'subs' => $cat['subs'],
						        			'level' => 1,
						        			'category' => $viewData['category']
						        		));
						        	}
						        	?>
						        	<?php endforeach; ?>


									
								</select>
								<input type="submit" value="" />
						    </form>
						</div>
					</div>
					<div class="col-sm-3">
						<a href="<?php echo BASE_URL; ?>cart">
							<div class="cartarea">
								<div class="carticon">
									<div class="cartqt"><?php echo $viewData['cart_qt']; ?></div>
								</div>
								<div class="carttotal">
									<?php $this->lang->get('CART'); ?>:<br/>
									<span>R$ <?php echo number_format($viewData['cart_subtotal'], 2, ',', '.'); ?></span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</header>
		<div class="categoryarea">
			<nav class="navbar">
				<div class="container">
					<ul class="nav navbar-nav">
						<li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $this->lang->get('SELECTCATEGORY'); ?>
					        <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					        	<?php foreach($viewData['categories'] as $cat): ?>
					        	<li>
					        		<a href="<?php echo BASE_URL.'categories/enter/'.$cat['id']; ?>">
					        			<?php echo $cat['name']; ?>
					        		</a>
					        	</li>
					        	<?php
					        	if(count($cat['subs']) > 0) {
					        		$this->loadView('menu_subcategory', array(
					        			'subs' => $cat['subs'],
					        			'level' => 1
					        		));
					        	}
					        	?>
					        	<?php endforeach; ?>
					        </ul>
					      </li>
					    <?php if(isset($viewData['category_filter'])): ?>
						    <?php foreach($viewData['category_filter'] as $cf): ?>
						    <li><a href="<?php echo BASE_URL; ?>categories/enter/<?php echo $cf['id']; ?>"><?php echo $cf['name']; ?></a></li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>
			</nav>
		</div>
		<section>
			<div class="container">
				<div class="row">
					<?php if(isset($viewData['sidebar'])): ?>
				  		<div class="col-sm-3">
				  			<?php $this->loadView('sidebar', array('viewData'=>$viewData)); ?>
				  		</div>
				  		<div class="col-sm-9"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
					<?php else: ?>
						<div class="col-sm-12"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
					<?php endif; ?>
				</div>
	    	</div>
	    </section>
	    <footer>
	    	<div class="container">
	    		<div class="row">
				  <div class="col-sm-4">
				  	<div class="widget">
			  			<h1><?php $this->lang->get('FEATUREDPRODUCTS'); ?></h1>
			  			<div class="widget_body">
			  				
			  				<?php $this->loadView('widget_item', array('list'=>$viewData['widget_featured2'])); ?>

			  			</div>
			  		</div>
				  </div>
				  <div class="col-sm-4">
				  	<div class="widget">
			  			<h1><?php $this->lang->get('ONSALEPRODUCTS'); ?></h1>
			  			<div class="widget_body">
			  				
			  				<?php $this->loadView('widget_item', array('list'=>$viewData['widget_sale'])); ?>

			  			</div>
			  		</div>
				  </div>
				  <div class="col-sm-4">
				  	<div class="widget">
			  			<h1><?php $this->lang->get('TOPRATEDPRODUCTS'); ?></h1>
			  			<div class="widget_body">
			  				
			  				<?php $this->loadView('widget_item', array('list'=>$viewData['widget_toprated'])); ?>

			  			</div>
			  		</div>
				  </div>
				</div>
	    	</div>
	    	<div class="subarea">
	    		<div class="container">
	    			<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">


<form action="//b7web.us2.list-manage.com/subscribe/post?u=0d44bd14b441c2648668c0c5c&amp;id=156305bc7f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
    <input type="email" value="" name="EMAIL" class="subemail required email" id="mce-EMAIL" placeholder="<?php $this->lang->get('SUBSCRIBETEXT'); ?>">
	<input type="hidden" name="b_0d44bd14b441c2648668c0c5c_156305bc7f" tabindex="-1" value="">
    <input type="submit" value="<?php $this->lang->get('SUBSCRIBEBUTTON'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button">
</form>

						</div>
					</div>
	    		</div>
	    	</div>
	    	<div class="links">
	    		<div class="container">
	    			<div class="row">
						<div class="col-sm-4">
							<a href="<?php echo BASE_URL; ?>"><img width="150" src="<?php echo BASE_URL; ?>assets/images/logo.png" /></a><br/><br/>
							<strong>Slogan da Loja Virtual</strong><br/><br/>
							Endereço da Loja Virtual
						</div>
						<div class="col-sm-8 linkgroups">
							<div class="row">
								<div class="col-sm-4">
									<h3><?php $this->lang->get('CATEGORIES'); ?></h3>
									<ul>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Menu 1</a></li>
										<li><a href="#">Menu 2</a></li>
										<li><a href="#">Menu 3</a></li>
										<li><a href="#">Menu 4</a></li>
										<li><a href="#">Menu 5</a></li>
										<li><a href="#">Menu 6</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Menu 1</a></li>
										<li><a href="#">Menu 2</a></li>
										<li><a href="#">Menu 3</a></li>
										<li><a href="#">Menu 4</a></li>
										<li><a href="#">Menu 5</a></li>
										<li><a href="#">Menu 6</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
	    		</div>
	    	</div>
	    	<div class="copyright">
	    		<div class="container">
	    			<div class="row">
						<div class="col-sm-6">© <span>Hydra Games</span> - <?php $this->lang->get('ALLRIGHTRESERVED'); ?>.</div>
						<div class="col-sm-6">
							<div class="payments">
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
							</div>
						</div>
					</div>
	    		</div>
	    	</div>
	    </footer>
		<script type="text/javascript">
		var BASE_URL = '<?php echo BASE_URL; ?>';
		<?php if(isset($viewData['filters'])): ?>
		var maxslider = <?php echo $viewData['filters']['maxslider']; ?>;
		<?php endif; ?>
		</script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html> -->