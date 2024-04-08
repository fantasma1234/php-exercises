<html>
    <head>
        <title>Exercício 12 - Quadrados de um intervalo</title>
    </head>
    <body>
        <?php
        $total = 0;
        for ($cont = 1; $cont <= 10; $cont++) 
        { 
            $total = $total + pow($cont, 2);
            echo $cont."² = ". pow($cont, 2)."<br>";
            if ($cont == 10) {
                echo "Soma total = $total";  
            }
        }
        ?>
    </body>
</html>