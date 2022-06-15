<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form method="post">
        Digite um número:
        <input type="number" name="numero">
        <input type="submit" name="">
    </form>
    <?php
        $numero = $_POST["numero"];

        if($numero > 0)
            echo 'número positivo';
        else if ($numero == 0)
            echo 'número igual a zero';
        else
            echo 'número negativo';
    ?>
</body>
</html>