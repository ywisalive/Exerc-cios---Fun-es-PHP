<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tarefa 4</title>

</head>

<body>

 

  <h1>Formulário com Caixa de Seleção</h1>

  <form action="" method="post">

    <label for="checkbox">Marque a caixa:</label>

    <input type="checkbox" id="checkbox" name="checkbox">

 

    <input type="submit" value="Enviar">

  </form>

 

</body>

</html>


<?php



function check()

{

    if (isset($_POST['checkbox'])) {

        $marcado = $_POST['checkbox'];

        return '<h4>marcado<h4>';

      } else {

        return '<h4>desmarcado<h4>';

      }

}


echo check($_POST)


  ?>