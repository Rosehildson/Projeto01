<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TESTE</title>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      width: max(1024px);
      margin-inline: auto;
      background-color: rgb(78, 76, 76);
      color: rgba(255, 255, 255, 0.9);
    }

    fieldset {
      padding: 1rem;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      width: max(30rem);
    }

    fieldset legend {
      text-align: center;
      padding: .3rem;
    }

    .input {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .input input {
      padding: .3rem;
      border-radius: .3rem;
      border: 1px solid black;
      width: 70%;

    }

    button {
      width: 8rem;
      padding: .5rem;
      align-self: flex-end;
      border: 1px solid rgba(255, 255, 255, 0.9);
      background-color: transparent;
      border-radius: .3rem;
      color: rgba(255, 255, 255, 0.9);
      transition: all .5s;
    }

    button:hover{
      filter: drop-shadow(.1rem .1rem .1rem black);
      background-color: rgba(78, 76, 76, 0.9);
      cursor: pointer;
    }
  </style>
</head>

<body>
  <section class="container">
    
    <fieldset>
      <legend>
        <h3>Cadastro de Funcionário</h3>
      </legend>

      <div class="input">
        <label for="matricula">Matricula</label>
        <input type="text" id="matricula">
      </div>
      <div class="input">
        <label for="nome">Nome</label>
        <input type="text" id="nome">
      </div>
      <div class="input">
        <label for="fone">Fone</label>
        <input type="tel" id="fone">
      </div>
      <div class="input">
        <label for="email">Email</label>
        <input type="email" id="email">
      </div>
      
      <div class="input">
        <label for="Avatar">Avatar</label>
        <input type="file" id="avatar" accept="image/png, image/jpg, image/jpeg ">
      </div>
      
      <button type="submit">Cadastar</button>
    </fieldset>
  </section>
</body>

</html>