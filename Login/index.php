<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Rodrigo Lima">
	<title>Sistema de Login</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<script>
  //CONTROLE DE ERROS--TEMPO
  setTimeout(function() {
  	$('#erro').fadeOut('linear');
  }, 2000);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>
	<div class="caixa">
		<img src="usuario.png" alt="imagem de usuário" class="usuario">
		<h2>LOGIN</h2>
		<?php
			if(isset($_GET['msg'])){
				$msg=$_GET['msg'];
				switch($msg){
					case 1:
					?>
					<div id="erro" class="erro"><p align="center">Digite seus dados antes de fazer login<p></div>
					<?php 
					break;
					case 2:
					?>
					<div id="erro" class="erro"><p align="center">Dados incorretos ou inexistentes, digite novamente<p></div>
					<?php
					break;
				}
			}
			?>
		<form action="verify.php" method="post">
			<p>Email</p>
			<input type="text" name="usuario" placeholder="Digite seu email">
			<p>Senha</p>
			<input type="password" name="senha" placeholder="********">
			<input type="submit" value="Entrar">	
			
		</form>
	</div>
</body>
</html>