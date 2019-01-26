<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'sistemalogin');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('ERRO AO CONECTAR');

session_start();

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header("Location: index.html?msg=1");
	exit();
}

$email= mysqli_real_escape_string($conexao, $_POST["usuario"]);
$senha= mysqli_real_escape_string($conexao, $_POST["senha"]);

$query= "select * from usuario where emailUsuario='{$email}'";

$result= mysqli_query($conexao, $query) or die (mysqli_error());
$row= mysqli_num_rows($result);

while($registro = mysqli_fetch_array($result)){
	$senharesult=$registro['senhaUsuario'];
}

echo $senharesult;

if(password_verify($senha, $senharesult)){
	header("location: logado.php");

}else{
	header("location: index.html?msg=2");
}


?>