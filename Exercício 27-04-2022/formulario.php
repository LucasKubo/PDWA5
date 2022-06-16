<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form actino="recebe_dados.php" method="post">
        <div align="center">
            <p>
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario">
                <label for="senha">Senha:</label>
                <input type="text" name="senha" id="senha">
            </p>
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email">
            </p>
            <p>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado">
            </p>
            <input type="submit" name="">
        </div>
        <?php
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $erro = FALSE;

            if(strlen($usuario)<5)
            {echo "O usuário deve possuir ao menos 5 caracteres. <br>";     $erro=TRUE;}
            if(strlen($senha)<5)
            {echo "A senha deve possuir ao menos 5 caracteres. <br>";     $erro=TRUE;}
            if(empty($nome) OR strstr($nome,''))
            {echo "Digite o nome corretamente. <br>";     $erro=TRUE;}
            if(strlen($email) OR !strstr($email,'@'))
            {echo "Digite o e-mail corretamente. <br>";     $erro=TRUE;}
            if(empty($cidade))
            {echo "Digite a cidade corretamente. <br>";     $erro=TRUE;}
            if(strlen($estado)!=2)
            {echo "Digite o estado corretamente. <br>";     $erro=TRUE;}
            if(!$erro)
            {echo "Todos os dados foram digitados corretamente!. <br>";}
    ?>
    </form>
</body>
</html>