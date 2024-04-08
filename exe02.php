<html>
    <head>
        <title>Exercício 2 - Positivo e Negativo</title>
    </head>
</html>
<body>
    <?php 
        $num = $_POST["txtNum"];
        if ($num >= 0) 
        {
            echo '<font color = "blue">'."<b>$num</b> é um número positivo".'</font>';
        }
        else
        {
            echo '<font color = "red">'."<b>$num</b> é um número negativo".'</font>';
        }
    ?>
</body>