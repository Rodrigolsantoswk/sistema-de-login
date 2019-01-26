<?php
if (isset($_GET['deslogar'])){
	session_destroy();
	header("location: index.php");
}
?>

<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Rodrigo Lima">
	<title>LOGADOO!!</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div class="caixa">
		<img src="usuario.png" alt="imagem de usuário" class="usuario">
		<h2>LOGIN</h2><br>
		<p align="center">Você está logado!</p><br>
		<button><a href="?deslogar">Deslogar</a></button>
	</div>
</body>
</html>