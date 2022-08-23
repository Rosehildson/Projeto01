<?php
	session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title>SISTEMA - PAINEL</title>
	<link href="estilo.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<header class="topo-pagina">
		<div>
            <img class="avatar" src="https://github.com/jolanjohnes.png">
            <br>
            <?php
                $logado = $_SESSION['email'];
                print_r($logado);
            ?>
            <br>
            <a href="sair.php">Sair</a>
		</div>
	</header>
	<nav class="barra-navegacao">
        <ul>
            <li><a href="painel.php">INICIO</a></li>
            <li><a href="funcionario.php">FUNCIONARIO</a></li>
            <li><a href="pagteste.php">TESTE</a></li>
        </ul>
	</nav><!--<nav class="navegacao">-->
</body>
</html>