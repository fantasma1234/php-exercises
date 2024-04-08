<html>
    <head>
        <title>Exercício 5 - Média</title>
    </head>
</html>
<body>
    <?php 
    $nota1 = $_POST["txtNota1"];
    $nota2 = $_POST["txtNota2"];
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 8)
    {
        echo "Aluno aprovado. Média final <b>$media</b>";
    }
    else
    {
        echo "Aluno reprovado. Média final <b>$media</b>";
    }
    ?>
</body>