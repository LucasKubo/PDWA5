<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
<form method="post">
        Digite o primeiro número:
        <input type="number" name="numeroA">
        Digite o segundo número:
        <input type="number" name="numeroB">
        <input type="submit" name="">
    </form>
    <?php 
        $numeroA = $_POST['numeroA'];
        $numeroB = $_POST['numeroB'];

        if($numeroA < $numeroB){
            echo "$numeroA $numeroB";
        }else if ($numeroB < $numeroA){
            echo "$numeroB $numeroA";
        }else
            echo "$numeroA $numeroB";
    ?>
</body>
</html>