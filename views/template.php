<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Music Space</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/music.png">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style1.css" type="text/css" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</head>
	<body>
		<?php
			require_once 'inicio.php';
		?>
		
		<div vw class="enabled">
		<div vw-access-button class="active"></div>
		<div vw-plugin-wrapper>
			<div class="vw-plugin-top-wrapper"></div>
		</div>
		</div>
		<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
		<script>
		new window.VLibras.Widget('https://vlibras.gov.br/app');
		</script>
		
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="assets/images/img2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="assets/images/img3.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="assets/images/img30.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-2 logo">
						<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/music.png" /></a>
					</div>
					<div class="col-sm-7">
						<div class="head_help">(12) 3881-1705</div>
						<div class="head_email">contato@<span>MusicSpace.com.br</span></div>
						
						<div class="search_area">
							<form action="<?php echo BASE_URL; ?>busca" method="GET">
								<input type="text" name="s" style="color: #000" value="<?php echo (!empty($viewData['searchTerm']))?$viewData['searchTerm']:''; ?>" required placeholder="<?php $this->lang->get('SEARCHFORANITEM'); ?>" />
								<select style="color: #000" name="category">

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
    <input type="email" value="" name="EMAIL" class="subemail required email" id="mce-EMAIL" style="color: #000" placeholder="<?php $this->lang->get('SUBSCRIBETEXT'); ?>">
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
							<a href="<?php echo BASE_URL; ?>"><img width="150" src="<?php echo BASE_URL; ?>assets/images/music.png" /></a><br/><br/>
							<strong style="color: yellow">Music Space</strong><br/><br/>
							<strong style="color: yellow">Av. Bahia, 1739 - Indaiá, Caraguatatuba - SP, 11665-071</strong>
						</div>
						<div class="col-sm-8 linkgroups">
							<div class="row">
								<div class="col-sm-4">
									<h3><?php $this->lang->get('CATEGORIES'); ?></h3>
									<ul>
										<li><a href="#">Quem Somos?</a></li>
										<li><a href="#">Informações</a></li>
										<li><a href="#">Portal</a></li>
										<li><a href="#">E-Commerce</a></li>
										<li><a href="#">Desenvolvimento</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Desenvolvedores</a></li>
										<li><a href="#">Projetos</a></li>
										<li><a href="#">Sobre nós</a></li>
										<li><a href="#">Produtos</a></li>
										<li><a href="#">Serviços</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Responsabilidades</a></li>
										<li><a href="#">Redes Sociais</a></li>
										<li><a href="#">Formas de Pagamentos</a></li>
										<li><a href="#">Endereço</a></li>
										<li><a href="#">Organização</a></li>
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
						<div class="col-sm-6">© <span>Music Space</span> - <?php $this->lang->get('ALLRIGHTRESERVED'); ?>.</div>
						<div class="col-sm-6">
							<div class="payments">
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/master.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/elo.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/hiper.png" />
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
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/gambi.js"></script>
	</body>
</html>