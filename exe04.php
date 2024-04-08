<html>
    <head>
        <title>Exercício 4 - Usuário e Senha</title>
    </head>
</html>
<body>
    <?php 
    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["password"];

    if ($usuario == "ETE" && $senha == "ETE") {
        echo "Bem vindo ao sistema";
    }
    else {
        echo "Usuário ou senha inválidos, tente novamente";
    }
    ?>
</body>