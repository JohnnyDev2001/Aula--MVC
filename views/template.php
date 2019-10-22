<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Music Space</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" type="text/css" />
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                    <a href="index.php"><img src="assets/images/logo1.png" class="navbar-brand" title="Music Space" width="150px" height="80px"></a>
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
                    <img src="assets/images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img1.jpg" class="d-block w-100" alt="...">
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
						<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo1.png" /></a>
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
						<a href=""><img src="assets/images/prod07.jpg" alt="some text" width="150px" height="280px"></a>
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
						<div class="col-sm-8 linkgroups">
							<div class="row">
								<div class="col-sm-4">
                                    <h2>PAGUE COM</h2>
                                    <hr/>
									<ul>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/visa.jpeg" border="0" width="47" height="32">
											</a>
										</li>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/mastercard.jpg" border="0" width="47" height="32">
											</a>
										</li>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/boleto.png" border="0" width="47" height="32">
											</a>
										</li>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/bdb.png" border="0" width="47" height="32">
											</a>
										</li>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/elo.jpg" border="0" width="47" height="32">
											</a>
										</li>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/bradesco.jpg" border="0" width="47" height="32">
											</a>
										</li>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/itau.jpg" border="0" width="47" height="32">
											</a>
										</li>
										<li style="display: inline;">
											<a href="#">
												<img src="assets/images/paypal.png" border="0" width="47" height="32">
											</a>
										</li>
									</ul>
								</div>
								<div class="col-sm-4">
                                    <h2>ATENDIMENTO</h2>
                                    <hr/>
									<ul>
										<li><a href="#">Central de Atendimento</a></li>
										<li><a href="#">Fale conosco</a></li>
										<li><a href="#">Cancelamento do Pedido</a></li>
										<li><a href="#">Política de Privacidade</a></li>
										<li><a href="#">Acompanhe seu Pedido</a></li>
										<li><a href="#">Troca ou Devolução</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
                                    <h2>INSTITUCIONAL</h2>
                                    <hr/>
                                    <div style="color: #fff; font-size: 12px;">
                                        O Music Space é o Projeto de um site de Venda de Instrumentos Musicais do curso de Técnico de Informática para Internet apresentado em 2019 no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo, Campus Caraguatatuba.
                                    </div>
                                    <div style="color: #fff; font-size: 12px; margin-top: 10px;">
                                        Ficou em dúvida? Acesse nosso canal de atendimento: <a href="https://gmail.com" style="text-decoration: none; color: #fff;">sac@musicspace.com.br</a>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<h2>SIGA-NOS</h2>
							<hr/>
								<div class="widget">
									<div class="widget_body">
										<a href="https://www.twitter.com/">
											<img src="assets/images/twitter.png" border="0" width="40" height="40">
										</a>
										<a href="https://www.facebook.com/">
											<img src="assets/images/facebook.png" border="0" width="40" height="40">
										</a>
										<a href="https://www.instagram.com/">
											<img src="assets/images/instagram.png" border="0" width="40" height="40">
										</a>
										<a href="https://www.whatsapp.com/">
											<img src="assets/images/whatsapp.png" border="0" width="40" height="40" style="margin-left: 8px;">
										</a>
									</div>
								</div>
						</div>
						<div class="col-sm-4" style="margin-top: 0px;">
							<div class="widget">
								<h2>SELO DE SEGURANÇA</h1>
								<div class="widget_body">
									<img src="assets/images/ssl.png" border="0" width="110" height="45" style="margin-top: -20px; margin-bottom: 20px;">
								</div>
							</div>
						</div>
					</div>
	    		</div>
	    	</div>
			
	    	<div class="copyright">
	    		<div class="container">
	    			<div class="row">
						<div class="col-sm" style="text-align: center; font-size: 12px; color: #fff;">© <span>Music Space Instrumentos Musicais Ltda CNPJ 18.986.449/0001-36 | Avenida Bahia, 1739 - Indaiá, Caraguatatuba - SP - CEP: 11665-071 <p>
							<a href="#" style="text-decoration: none; color: #fff;">João Victor - Luan Vitor - Michael Pereira - Irys Mel |</a>
							 Todos os direitos reservados. 2019
						</p></span></div>
						
						
					</div>
	    		</div>
	    	</div>
	    </footer>
		<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>