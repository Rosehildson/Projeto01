<?php
   ///verificar se a variavel gloal $_FILES do input image tem conteudo 
   if(isset($_FILES['image'])){

    //cria um array vazio para armazenar os erros
      $errors= array();


      //cria variaves para nomes, tamnanho, tipo, nome temporario e tipo e armazenda
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];

      //do nome ele faz um explode no nome da variavel, e divide por ponto,
      //depois usa a função end para pegar apenas o ultimo elemento do array gerado pelo explode
      //depois usa a função strtolower para transformar tudo em minusculo

      $temp = explode('.', $file_name);
      $file_ext = strtolower(end($temp));
      
      //array de extenssões que ele permite fazer o upload
      $extensions= array("jpeg","jpg","png");
      

      //verifica se a extensão capturada contem no array de extensão permitidas.
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      

      //verifica se o tamanho do arquivo esta do desejado, lembrando que o calculo é em bytes
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }


          
      //verificar se a variavel erros esta vazia com o metodos empty caso sim ele faz o upload
      //caso não print na tela o erro.
      if(empty($errors)==true) {

        //função que realiza o uploado do arquivo arquivo passado para pela variavel $_FILES
        //este metodo retorna true ou false
        // e ai vc pode fazer uma validação para saber se o upload deu certo ou não
         move_uploaded_file($file_tmp,"files/".$file_name);


         ///escreve nda tela que deu tudo certo
         echo '<h4>upload realizado com sucesso!</h4>';
      }else{
         print_r($errors);
      }
   }
?>

<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>  	
      </form>
      
   </body>
</html>