<?php
    session_start();
// ##### TESTE DE ENVIO DE DADOS #####

/*
print_r($_REQUEST);
*/

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //se existir a variavel submit, então acessa o sistema
        
        //inclindo a pagina de conexao com o banco
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        
        print_r('<br>');
        print_r('<br>');

        print_r('email: ' . $email);
        print_r('<br>');
        print_r('senha: ' . $senha);
        
        print_r('<br>');
        print_r('<br>');

        $sql = "select * from usuarios where email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

        print_r($result);
        print_r($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: painel.php');
        }
    }
    else
    {
        //se NÂO existir a variavel submit, então NÂO acessa o sistema
        header('location: login.php');
    }
?>