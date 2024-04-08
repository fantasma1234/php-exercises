<html>
    <head>
        <title>Exercício 7 - Código da tabela</title>
    </head>
</html>
<body>
    <?php 
    $codigo = $_POST["txtCodigo"];
    switch ($codigo) 
    {
        case 1:
            echo "Secretária";
            break;
        case 2:
            echo "Gerente";
            break;
        case 3:
            echo "Operário";
            break;
        case 4:
            echo "Analista";
            break;
        case 5:
            echo "Faxineiro";
            break;
        default:
            echo "Número inválido";
            break;
    }
    ?>
</body>