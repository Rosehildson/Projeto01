<?php

if(isset($_POST['submit']))
{
/*
// ##### TESTE DE ENVIO DE DADOS #####
	print_r('Nome: '.$_POST['nnome']);
	print_r('<br>');
	print_r('Fone: '.$_POST['ffone']);
	print_r('<br>');
	print_r('E-mail: '.$_POST['eemail']);
	
*/

include_once('config.php');

$vnome = $_POST['nnome'];
$vfone = $_POST['ffone'];
$vemail = $_POST['eemail'];
$vsenha = $_POST['ssenha'];

$sql = mysqli_query($conn, "INSERT INTO usuarios(nome,fone,email,senha) VALUES ('$vnome','$vfone','$vemail','$vsenha')");
	
$message = ($sql ? '<script>alert(Ok)</script>' : '<script>alert(ERROR)</script>');	

print_r($message);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuarios</title>
</head>
<body>
		<a href="login.php">Voltar</a><br><br>
	<form action="cadastro.php" method="POST">

		<label for="nnome">Nome Completo:</label><br>
		<input type="text" id="nnome" name="nnome"><br><br>

		<label for="ffone">Telefone:</label><br>
		<input type="text" id="ffone" name="ffone"><br><br>

		<label for="eemail">Email:</label><br>
		<input type="text" id="eemail" name="eemail"><br><br>

		<label for="ssenha">Senha:</label><br>
		<input type="password" id="ssenha" name="ssenha"><br><br>

		<label for="repsenha">Confirma a senha:</label><br>
		<input type="password" id="repsenha" name="repsenha"><br><br>	

		<input type="submit" name="submit" value="ACESSAR">
	</form>
</body>
</html>