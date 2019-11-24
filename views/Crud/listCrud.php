<?php
include_once 'message.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Music Space</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/music.png">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style1.css" type="text/css" />

	</head>
    <body>

    <div class="container">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Produtos </h3>
		<?php
				$crud = new Crud();
				$dado = $crud->getProducts();
				if($crud->checkNum() == true) {
				foreach($dado->fetchAll() as $dados){
    	?>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Descrição:</th>
					<th>Stock:</th>
					<th>Price:</th>
					<th>Price_from:</th>
				</tr>
			</thead>
            <tr>
					<td><?php echo $dados['name']; ?></td>
					<td><?php echo $dados['description']; ?></td>
					<td><?php echo $dados['stock']; ?></td>
					<td><?php echo $dados['price']; ?></td>
					<td><?php echo $dados['price_from']; ?></td>
					<td><a href="<?php echo BASE_URL; ?>editarCrud/getid/<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse produto?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form method="POST">
					      	<input type="hidden" name="id_del" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


			</tr>
		</table>
		<br>
		<?php
			}
			}
		?>
		<a href="<?php echo BASE_URL; ?>addCrud" class="btn">Adicionar Produtos</a>
		</div>
	</div>

    	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

      <script>
      	 M.AutoInit();
      	</script>
	</body>
</html>