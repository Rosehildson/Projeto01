<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>
      <style type="text/css">
        *{
          list-style: none;
          text-decoration: bold;
        }
        /* Flex */
        .flex {
          display: flex;

        }

        /* Flex Item */
        .lado-esquerdo {
          width: 200px;
          font-family: arial;
          text-align: right;
        }

        .lado-direito {
          width: 500px;
          text-decoration: none;
          text-align: left;
        }
        li, input{
          padding: 15px;
          outline: none;
          border-radius: 15px;
          font-size: 15px;
          width: 89%;
          font-weight: bold;
        }
      </style>
</head>
<body>
<h3>Cadastro de funcionário</h3><br/>
<section class="flex">
	<div class="lado-esquerdo">
    <ul>
      <li>Matricula:</li><br>
      <li>Nome Completo:</li><br>
      <li>Fone:</li><br>
      <li>Email:</li><br>
    </ul>
  </div>
	<div class="lado-direito">
    <ul>
      <li><input type="text" id="mmatricula" name="mmatricula" value="" size="5" placeholder="000000"required></li><br>
      <li><input type="text" id="nnome" name="nnome" value="" size="40" required></li><br>
      <li><input type="text" id="ffone" name="ffone" value="" size="10" maxlength="11" placeholder="(00) 00000-0000"></li><br>
      <li><input type="eemail" id="eemail" name="eemail" size="40" placeholder="exemplo@provedor.com"><br/><br/></li><br>
    </ul>
  </div>
</section>
</body>
</html>