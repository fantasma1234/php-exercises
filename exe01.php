<html>
    <head>
        <title>Exercício 1 - Compra</title>
    </head>
</html>
<body>
    <?php 
        $compra = $_POST["txtCompra"];
        if ($compra >= 100) 
        {
            echo '<font color = "blue">'."Compra maior ou igual a cem. (R$$compra)". '</font>';
        }
        else
        {
            echo '<font color = "red">'."Compra menor que cem. (R$$compra)". '</font>';
        }
    ?>
</body>