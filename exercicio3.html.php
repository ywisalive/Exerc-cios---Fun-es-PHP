<!DOCTYPE html>

<html lang="enpt-br>
<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tarefa 3</title>

</head>

<body>

 

  <h1>Formulário com Campo de Seleção</h1>

 

  <form action="" method="post">

    <label for="fruta">Selecione uma fruta:</label>

    <select id="fruta" name="fruta">

      <option value="maca">Maçã</option>

      <option value="banana">Banana</option>

      <option value="laranja">Laranja</option>

      <option value="kiwi">Abacate</option>

      <option value="pera">Pera</option>

    </select>

 

    <input type="submit" value="Enviar">

  </form>

 

</body>

</html>





<?php

  if (isset($_POST['fruta'])) {

    $frutaSelecionada = $_POST['fruta'];

    echo "<h4>A opção selecionada foi: $frutaSelecionada</h4>";

  }

  ?>