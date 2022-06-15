<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form method="post">
        Digite seu nome:
        <input type="text" name="nome">
        Digite sua idade:
        <input type="number" name="idade">
        <input type="submit" name="">
    </form>
    <?php
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        if($idade >= 18)
            echo "$nome é maior de 18 e tem $idade anos";
        else
            echo "$nome é menor de 18 e tem $idade anos";
    ?>
</body>
</html>