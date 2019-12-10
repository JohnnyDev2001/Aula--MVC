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
    <body style='color: #000;'>
    <?php
        $users = new Users();

        $id_user = $_SESSION['id_user'];
        $dado = $users->infoPerfil($id_user);
        $dados = $dado->fetch();
	?>
<br>
                <div class="container" style="background-color:yellow; border: 1px solid #7575a3; padding: 5px;">
                    <b><p style="color:#ff0000">PREENCHA TODOS OS CAMPOS PARA REALIZAR A COMPRA</p></b>
                </div>
                <br>
                <div class="container" style="background-color:#cce6ff; border: 1px solid #7575a3; padding: 5px;">
                    <form method="POST" style="padding: 5px;" id="mandar">
                        <div class="form-group">
                            <label style='color: #000;' for="cartão">NUMERO DO CARTÃO:</label>
                            <input type="text"  class="form-control" name="number_card" placeholder="Numero Do Cartão" style="width:40%;"/>
                            <input type="text"  class="form-control" name="name_card" placeholder="Nome Do Cartão" style="width:40%;"/>
                        </div>
                        <div style='color: #000;' class="form-group">
                            <input type="text" class="form-control" name="expiry_card" placeholder="Data" style="width:40%;"/>
                            <input type="text" class="form-control" name="cvc_card" placeholder="CVC" style="width:40%;"/>
                        <br>
                        <br>
						<div class="form-group">
						  <label style='color: #000;' for="cep">CEP:</label>
						  <input type="text" class="form-control" id="cep" value="<?php echo $dados['cep'];?>" name="cep" style="width:20%;">
						</div>
						<div class="form-group">
						  <label style='color: #000;' for="telefone">Telefone:</label>
						  <input type="text" class="form-control" id="telefone" value="<?php echo $dados['telefone'];?>" name="telefone" style="width:20%;">
						</div>
						<div class="form-group">
						  <label style='color: #000;' for="endereco">Endereco:</label>
						  <input type="text" class="form-control" id="endereco" value="<?php echo $dados['endereco'];?>" name="endereco" style="width:40%;">
						  <label style='color: #000;' for="num_casa">Numero da Casa:</label>
						  <input type="text" class="form-control" id="num_casa" value="<?php echo $dados['num_casa'];?>" name="num_casa" style="width:10%;">
						</div>
                        <div class="form-group">
                          <label style='color: #000;' for="referencia">Referencia:</label>
						  <input type="text" class="form-control" id="referencia" value="<?php echo $dados['referencia'];?>" name="referencia" style="width:40%;">
                        </div>
						<div class="form-group">
						  <label style='color: #000;' for="cidade">Cidade:</label>
						  <input type="text" class="form-control" id="cidade" value="<?php echo $dados['cidade'];?>" name="cidade" style="width:40%;">
						  <label style='color: #000;' for="estado">Estado:</label>
						  <input type="text" class="form-control" id="estado" value="<?php echo $dados['estado'];?>" name="estado" style="width:10%;">
						</div>
							<input type="button" id="btn" style='color: #fff; background-color:red;' value="COMPRAR" class="btn">
					</form>
                </div>
                

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/verify.js"></script>
</body>
</html>