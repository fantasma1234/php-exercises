<html>
    <head>
        <title>Exercício 3 - Par e Impar</title>
    </head>
</html>
<body>
    <?php 
        $num = $_POST["txtNum"];
        if ($num % 2 == 0) 
        {
            echo '<font color = "blue">'."<b>$num</b> é um número Par".'</font>';
        }
        else
        {
            echo '<font color = "red">'."<b>$num</b> é um número Impar".'</font>';
        }
    ?>
</body>