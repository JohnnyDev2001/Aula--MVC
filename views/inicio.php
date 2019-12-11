<nav class="navbar topnav">
			<div class="container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo BASE_URL; ?>"><?php $this->lang->get('HOME'); ?></a></li>
					<li><a href="#cont"><?php $this->lang->get('ENDERECO'); ?></a></li>
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
					<?php if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){?>
						<li><a href="<?php echo BASE_URL; ?>perfil"><img src="assets/images/perf.jpg" width="15px" height="15px" style="border-radius: 10px;"/> <?php $this->lang->get('PERFIL'); ?></a></li>
						<li><a href="<?php echo BASE_URL; ?>logout">Sair</a></li>
					<?php }else{?>
						<li><a href="<?php echo BASE_URL; ?>login"><?php $this->lang->get('LOGIN'); ?></a></li>
						<li><a href="<?php echo BASE_URL; ?>cadastro"><?php $this->lang->get('REGISTER'); ?></a></li>
					<?php }?>
				</ul>
			</div>
		</nav>