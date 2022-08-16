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
            <a href="funcionario.php">FUNCIONARIO</a>
            <a href="relatorio.php">RELATORIO</a>
        </div>
	</nav><!--<nav class="navegacao">-->
	<div id="pagina-funcionario">
		<form class="formulario-funcionario" action="php/conexao.php" method="post" target="_self">
			<div class="funcionario-cadastro">
				<h3>Cadastro de funcionário</h3><br/>
				<!--<label for="id">Id:</label>
 				<input type="text" id="id" name="id" value="id" disabled>-->
				<label for="mmatricula">Matrícula: </label>
			 	<input type="text" id="mmatricula" name="mmatricula" value="" size="5" required>
				<label for="nnome">Nome completo: </label>
				<input type="text" id="nnome" name="nnome" value="" size="40" required>
				<label for="ssexo">Sexo</label>
				<select id="ssexo" name="ssexo">
				  	<option value="masc">Masculino</option>
				  	<option value="femi">Feminino</option>
				  	<option value="outr">Outros</option>
				</select><!--<select id="sexo" name="sexo">-->
				<label for="ffone">Fone: </label>
				<input type="text" id="ffone" name="ffone" value="" maxlength="11" size="10">
				<label for="eemail">E-mail:</label>
				<input type="eemail" id="eemail" name="eemail" size="40"><br/><br/>
				<label for="ffuncao">Função: </label>
				<input type="text" id="ffuncao" name="ffuncao" value="" size="20">
				<label for="ssetor">Setor: </label>
				<input type="text" id="ssetor" name="ssetor" value="" size="20">
				<!--<label for="aadmissao">Admissão:</label>
				<input type="date" id="aadmissao" name="aadmissao">
				<label for="ddesligamento">Desligamento:</label>
				<input type="date" id="ddesligamento" name="ddesligamento"><br/><br/>-->
			</div><!--<div class="funcionario-cadastro">-->
                <br>
			<div class="funcionario-documento">
				<h3>Documentos</h3><br/>
				<label for="rrg">RG: </label>
			 	<input type="text" id="rrg" name="rrg" value="">
				<label for="ccpf">CPF: </label>
			 	<input type="text" id="ccpf" name="ccfp" value="">
			 	<label for="ccnh">CNH: </label>
			 	<input type="text" id="ccnh" name="ccnh" value="">
				<label for="ssus">SUS: </label>
				<input type="text" id="ssus" name="ssus" value=""><br/><br/>
				<label for="ppis">PIS: </label>
				<input type="text" id="ppis" name="ppis" value="" maxlength="11" required>
				<label for="cctps">CTPS: </label>
				<input type="text" id="cctps" name="cctps" value=""><br/><br/>
			</div><!--<div class="funcionario-documento">-->
			<div class="funcionario-botoes">
				<input type="submit" name="salvar" value="SALVAR">
			</div><!--<div class="funcionario-botoes">-->
		</form>
	</div><!--<div id="meio">-->    
</body>
</html>