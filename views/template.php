<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Music Space</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>asserts/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>asserts/css/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>asserts/css/bootstrap.css" type="text/css" />
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                    <a href="index.php"><img src="asserts/images/logo1.png" class="navbar-brand" title="Music Space" width="150px" height="80px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="navbar-brand" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active" >
                          <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Empresa</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="cordas.php">Cordas</a>
                            <a class="dropdown-item" href="teclas.php">Teclas</a>
                            <a class="dropdown-item" href="percussao.php">Percussão</a>
                            <a class="dropdown-item" href="sopro.php">Sopro</a>
                            <a class="dropdown-item" href="audio.php">Áudio</a>
                          <div class="#"></div>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#" tabindex="-1" aria-active="true">Contato</a>
                        </li>
                      </ul>
                        <div class="menu1">
                        </div>
                    </div>
				  </nav>
				  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asserts/images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asserts/images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asserts/images/img1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
		
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-2 logo">
						<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>asserts/images/logo1.png" /></a>
					</div>
					<div class="col-sm-7">
						<div class="head_help">(11) 9999-9999</div>
						<div class="head_email">contato@<span>MusicSpace.com.br</span></div>
						
						<div class="search_area">
							<form method="GET">
								<input type="text" name="s" required placeholder="<?php $this->lang->get('SEARCHFORANITEM'); ?>" />
								<select name="category">
									<option value=""><?php $this->lang->get('ALLCATEGORIES'); ?></option>
								</select>
								<input type="submit" value="" />
						    </form>
						</div>
					</div>
					<div class="col-sm-3">
						<a href="<?php echo BASE_URL; ?>cart">
							<div class="cartarea">
								<div class="carticon">
									<div class="cartqt">150</div>
								</div>
								<div class="carttotal">
									<?php $this->lang->get('CART'); ?>:<br/>
									<span>R$ 1.500.000,00</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="container">
				<div class="row">
				  <div class="col-sm-3">
				  	<aside>
				  		<h1>Destaque da semana</h1>
						<br>
						<a href=""><img src="asserts/images/prod07.jpg" alt="some text" width="150px" height="280px"></a>
						<br>
						<h2> R$ 3.560,25
				  	</aside>
				  </div>
				  <div class="col-sm-9"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
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
			  				...
			  			</div>
			  		</div>
				  </div>
				  <div class="col-sm-4">
				  	<div class="widget">
			  			<h1><?php $this->lang->get('ONSALEPRODUCTS'); ?></h1>
			  			<div class="widget_body">
			  				...
			  			</div>
			  		</div>
				  </div>
				  <div class="col-sm-4">
				  	<div class="widget">
			  			<h1><?php $this->lang->get('TOPRATEDPRODUCTS'); ?></h1>
			  			<div class="widget_body">
			  				...
			  			</div>
			  		</div>
				  </div>
				</div>
	    	</div>
	    	<div class="subarea">
	    		<div class="container">
	    			<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
							<form method="POST">
                                <input class="subemail" name="email" placeholder="<?php $this->lang->get('SUBSCRIBETEXT'); ?>">
                                <input type="submit" value="<?php $this->lang->get('SUBSCRIBEBUTTON'); ?>" />
                            </form>
						</div>
					</div>
	    		</div>
	    	</div>
	    	<div class="links">
	    		<div class="container">
	    			<div class="row">
						<div class="col-sm-4">
							<a href="<?php echo BASE_URL; ?>"><img width="150" src="<?php echo BASE_URL; ?>asserts/images/patrio.png" /></a><br/><br/>
							<strong>New England Patriots</strong><br/><br/>
							Nova Inglaterra, EUA
						</div>
						<div class="col-sm-8 linkgroups">
							<div class="row">
								<div class="col-sm-4">
									<h3><?php $this->lang->get('CATEGORIES'); ?></h3>
									<ul>
										<li><a href="#">Roupas</a></li>
										<li><a href="#">Uniformes</a></li>
										<li><a href="#">Equipamentos</a></li>
										<li><a href="#">Ingressos</a></li>
										<li><a href="#">Socios</a></li>
										<li><a href="#">Historia</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Titulos</a></li>
										<li><a href="#">Comissão Tecnica</a></li>
										<li><a href="#">Hall da Fama</a></li>
										<li><a href="#">Proximos Jogos</a></li>
										<li><a href="#">Mapa da Cidade</a></li>
										<li><a href="#">Curiosidades</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Regras</a></li>
										<li><a href="#">Testes</a></li>
										<li><a href="#">Seja Socio</a></li>
										<li><a href="#">Quêm somos</a></li>
										<li><a href="#">Infraestrutura</a></li>
										<li><a href="#">Fale Conosco</a></li>
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
						<div class="col-sm-6">© <span>New England Patriots</span> - <?php $this->lang->get('ALLRIGHTRESERVED'); ?>.</div>
						<div class="col-sm-6">
							<div class="payments">
								<img src="<?php echo BASE_URL; ?>asserts/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>asserts/images/master.png" />
								<img src="<?php echo BASE_URL; ?>asserts/images/elo.png" />
								<img src="<?php echo BASE_URL; ?>asserts/images/hiper.png" />
							</div>
						</div>
					</div>
	    		</div>
	    	</div>
	    </footer>
		<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>asserts/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>asserts/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>asserts/js/script.js"></script>
	</body>
</html>