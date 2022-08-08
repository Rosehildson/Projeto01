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
	<title>SISTEMA - CHAMDADO</title>
	<link href="estilo.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<header>
		<div class="TopoPagina">
            <?php
                $logado = $_SESSION['email'];
                print_r($logado);
            ?>
            <br>
            <a href="sair.php">Sair</a>
		</div>
	</header>
	<nav class="navegacao">
        <div class="BarraNavegacao">
            <a href="painel.php">INICIO</a>
            <a href="chamado.php">CHAMADO</a>
            <a href="relatorio.php">RELATORIO</a>
        </div>
	</nav><!--<nav class="navegacao">-->
</body>
</html>