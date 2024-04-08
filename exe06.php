<html>
    <head>
        <title>Exercício 6 - Peso ideal</title>
    </head>
</html>
<body style="background-color: black;">
    <?php 
    $nome = $_POST["txtNome"];
    $peso = $_POST["txtPeso"];
    $sexo = $_POST["sexo"];
    $altura = $_POST["txtAltura"];

    if ($sexo == "Masculino")
    {
        $pi = $altura * 2 * 23;
        if ($pi > $peso)
        {
            echo '<font color = "yellow">'."$nome, você está Abaixo do Peso Ideal. Seu peso [$peso kg] / Peso Ideal [$pi kg]" . '</font>';
        }
        else if ($pi < $peso)
        {
            echo '<font color = "red">'."$nome, você está Acima do Peso Ideal. Seu peso [$peso kg] / Peso Ideal [$pi kg]" . '</font>';
        }
        else
        {
            echo '<font color = "blue">'."$nome, você está Dentro do Peso Ideal. Seu peso [$peso kg] / Peso Ideal [$pi kg]" . '</font>';
        }
    }
    else
    {
        $pi = $altura * 2 * 22;
        if ($pi > $peso)
        {
            echo '<font color = "yellow">'."$nome, você está Abaixo do Peso Ideal. Seu peso [$peso kg] / Peso Ideal [$pi kg]" . '</font>';
        }
        else if ($pi < $peso)
        {
            echo '<font color = "red">'."$nome, você está Acima do Peso Ideal. Seu peso [$peso kg] / Peso Ideal [$pi kg]" . '</font>';
        }
        else
        {
            echo '<font color = "blue">'."$nome, você está Dentro do Peso Ideal. Seu peso [$peso kg] / Peso Ideal [$pi kg]" . '</font>';
        }
    }
    ?>
</body>