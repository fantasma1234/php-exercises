<html>
    <head>
        <title>Exercício 11 - Soma de um intervalo</title>
    </head>
    <body>
        <?php
        $total = 0;
        for ($cont =3; $cont <= 8; $cont++) 
        { 
            $total = $total + $cont;
            if ($cont == 8) 
            {
                echo "$cont = $total";
            }
            else 
            {
                echo "$cont + ";
            }
        }
        ?>
    </body>
</html>