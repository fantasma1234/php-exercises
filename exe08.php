<html>
    <head>
        <title>Exercício 8 - Código da operação</title>
    </head>
</html>
<body>
    <?php
    $num1 = $_POST["txtNum1"];
    $num2 = $_POST["txtNum2"];

    $codigo = $_POST["txtCodigo"];
    switch ($codigo) 
    {
        case 1:
            echo "$num1 + $num2 = " . $num1 + $num2;
            break;
        case 2:
            echo "$num1 - $num2 = " . $num1 - $num2;
            break;
        case 3:
            echo "$num1 / $num2 = " . $num1 / $num2;
            break;
        case 4:
            echo "$num1 * $num2 = " . $num1 * $num2;
            break;
        default:
            echo "Número inválido";
            break;
    }
    ?>
</body>