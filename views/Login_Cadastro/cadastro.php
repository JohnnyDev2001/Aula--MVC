<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Music Space</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/music.png">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/cadastro.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />

	</head>
    <body>
		<div class="container">
			<div class="card"> 
				<form method="POST" style="padding: 5px;">
					<div class="form-group">
						<h2>Cadastre-se</h2>
							<label for="nome">Nome:</label>
							<input type="text" class="form-control" id="user" name="user" style="width:100%;">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" name="email" style="width:100%;">
							<label for="senha">Senha:</label>
							<input type="password" class="form-control" id="psw" name="psw" style="width:100%;">
							<br>
							<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>