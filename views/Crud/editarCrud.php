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
	$crud = new Crud();
	$id = $_SESSION['id_prod'];
	$dado = $crud->getProductWhere($id);

	$dados = $dado->fetch();
	?>
	<div class="container" style="background-color:#f2f2f2; border: 1px solid #7575a3; padding: 5px;">
					<form method="POST" style="padding: 5px;">
						<div class="form-group">
						  <label for="nome">Nome:</label>
						  <input type="text" class="form-control" id="name" value="<?php echo $dados['name'];?>" name="name" style="width:20%;">
						</div>
						<div class="form-group">
						  <label for="descrição">Descrição:</label>
						  <input type="text" class="form-control" id="descrição" value="<?php echo $dados['description'];?>" name="desc" style="width:60%; height:100px;">
						</div>
						<div class="form-group">
						  <label for="stock">Stock:</label>
						  <input type="text" class="form-control" id="stock" value="<?php echo $dados['stock'];?>" name="stock" style="width:20%;">
						</div>
                        <div class="form-group">
                          <label for="preço">Preço:</label>
						  <input type="text" class="form-control" id="price" value="<?php echo $dados['price'];?>" name="price" style="width:20%;">
                        </div>
						<div class="form-group">
						  <label for="preço de sei lá oq">Preço de sei lá oq:</label>
						  <input type="text" class="form-control" id="price_from" value="<?php echo $dados['price_from'];?>" name="price_from" style="width:20%;">
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