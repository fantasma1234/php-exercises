<html>
    <head>
        <title>Exercício 10 - Numeros pares</title>
    </head>
</html>
<body>
    <?php
    $total = 0;
    for ($cont=1; $cont <= 10; $cont++) 
    { 
        if ($cont % 2 == 0) 
        {
            echo "Número par $cont <br>";
            $total += $cont;
            if ($cont == 10) 
            {
                echo "Soma igual a $total";
            }
        }
    }
    ?>
</body>