<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbase1";

// criando a conexao com o banco
$conn = new mysqli($servername, $username, $password, $dbname);

/*
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Informações salvas com sucesso!";
*/

?>