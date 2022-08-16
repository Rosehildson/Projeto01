<?php
	session_start();
	//print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
		body{
			font-family: arial;
		}
		h1{
			text-align: center;
		}
		div{
			background-color: #A9A9A9;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 40px;
			border-radius: 15px;
			color: white;
		}
		input{
			padding: 15px;
			border: none;
			outline: none;
			border-radius: 15px;
			font-size: 15px;
			width: 89%;
			font-weight: bold;
		}		
		.inputsubmit{
			padding: 15px;
			border: none;
			outline: none;
			border-radius: 15px;
			background-color: #4169E1;
			width: 100%;
			color: white;
			font-weight: bold;
		}
		
		a{
			color: white;
		}
	</style>
</head>
<body>
	<div>
		<h1>LOGIN</h1>
		<form action="testelogin.php" method="POST">
			<input type="text" id="email" name="email" placeholder="E-mail"><br><br>
			<input type="password" id="senha" name="senha" placeholder="Senha"><br><br>
			<input class="inputsubmit" type="submit" name="submit" value="ACESSAR"></input>
		</form>
		<br>
		<a href="cadastro.php">Cadastre-se</a>
		&nbsp; | &nbsp;
		<a href="esquecisenha.php">Esqueci minha senha</a>
	</div>
</body>
</html>
