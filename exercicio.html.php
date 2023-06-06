<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tarefa 1</title>

</head>

<body>

   

<h1>Cadrasto de Usuário</h1>

   

    <form action="" method="post">

        <label for="">Primeiro Nome:</label>

        <input type="text" name="nome" id=""><br><br>

 

        <label for="">Sobrenome:</label>

        <input type="text" name="sobrenome" id=""><br><br>

 

        <label for="">Data de nascimento</label>

        <input type="date" name="datanasc" id=""><br><br>

 

        <label for="">Sexo</label>

            <select name="sexo" id="">

                <option value=""></option>

                <option value="masculino">Masculino</option>

                <option value="feminino">Feminino</option>

                <option value="naoquerdizer">Não quero dizer</option>

            </select><br><br>

 

        <label for="">Aceita os termos de cadastro:</label>

        <input type="checkbox" name="termos" id=""><br><br>

        <input type="submit" value="Cadastrar">

    </form>





</body>

</html>





<?php

 

function validacampos($dados){

    foreach ($dados as $key => $value) {

        echo "$key = $value <br>";

    }

}

 

echo validacampos($_POST)

?>
