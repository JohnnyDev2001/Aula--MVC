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


	</head>
    <body>
		<?php
			$dados = array();
			$this->loadView('inicio', $dados);
		?>

    <?php
        $users = new Users();

        $id_user = $_SESSION['id_user'];
        $dado = $users->infoPerfil($id_user);
        $dados = $dado->fetch();
		?>
    <div class="container" style="padding: 5px; height:500px;">
		<div class="card" style="width:30%; padding: 5px; background-color:#f2f2f2; float: left;">
            <div class="card-img-top" alt="Card image" style="width:100%; height:300px; background-image: url(<?php if($dados['img_perfil'] != ""){ echo "assets/img_perfil/".$dados['img_perfil'];}else{ echo "assets/img_perfil/perfil.png"; }?>); background-repeat: no-repeat; background-size: 100%;">
				<a href="<?php echo BASE_URL; ?>upload"><button type="button" class="btn btn-primary">Foto</button></a>
			</div>
			<div class="card-body">
				<h4 class="card-title" style="color:#000;">PERFIL</h4>
				<p class="card-text"><b>Nome: <?php echo $dados['name'];?></b></p>
				<p class="card-text"><b>Email: <?php echo $dados['email'];?></b></p>
			</div>
		</div>
	</div>
				<br>
				<div class="container" style="background-color:#f2f2f2; border: 1px solid #7575a3; padding: 5px;">
					<form method="POST" style="padding: 5px;">
						<div class="form-group">
						  <label style="color:#000;" for="cep">CEP:</label>
						  <input type="text" class="form-control" id="cep" value="<?php echo $dados['cep'];?>" name="cep" style="width:20%;">
						</div>
						<div class="form-group">
						  <label style="color:#000;" for="telefone">Telefone:</label>
						  <input type="tel" class="form-control" id="telefone" value="<?php echo $dados['telefone'];?>" name="telefone" style="width:20%;">
						</div>
						<div class="form-group">
						  <label style="color:#000;" for="endereco">Endereco:</label>
						  <input type="text" class="form-control" id="endereco" value="<?php echo $dados['endereco'];?>" name="endereco" style="width:40%;">
						  <label style="color:#000;" for="num_casa">Numero da Casa:</label>
						  <input type="text" class="form-control" id="num_casa" value="<?php echo $dados['num_casa'];?>" name="num_casa" style="width:10%;">
						</div>
                        <div class="form-group">
                          <label style="color:#000;" for="referencia">Referencia:</label>
						  <input type="text" class="form-control" id="referencia" value="<?php echo $dados['referencia'];?>" name="referencia" style="width:40%;">
                        </div>
						<div class="form-group">
						  <label style="color:#000;" for="cidade">Cidade:</label>
						  <input type="text" class="form-control" id="cidade" value="<?php echo $dados['cidade'];?>" name="cidade" style="width:40%;">
						  <label style="color:#000;" for="estado">Estado:</label>
						  <input type="text" class="form-control" id="estado" value="<?php echo $dados['estado'];?>" name="estado" style="width:10%;">
						</div>
							<button type="submit" class="btn btn-primary">Salvar</button>
					</form>
				</div>
				<br>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>