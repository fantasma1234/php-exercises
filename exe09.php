<html>
    <head>
        <title>Exercício 9 - Quadrados de 5 a 10</title>
    </head>
</html>
<body>
    <?php 
    for ($cont = 5; $cont <= 10; $cont++) 
    { 
        echo "O quadrado de $cont é ". pow($cont, 2) . "<br>";
    }
    ?>
</body>