<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funções de Manipulação de Strings no PHP</title>
</head>
<body>
    <?php
        /$cunhado = "anglae";
        $nome_do_cunhado = strtoupper($cunhado);
        echo $nome_do_cunhado;/

        /$cunhado = "ANGLAE";
        $nome_do_cunhado = strtolower(str)($cunhado);
        echo $nome_do_cunhado;/

        $jogadora = "Sulamyta Moreira<br>";
        $parte = substr($jogadora, 5);
        echo $parte;

        $jogadora = "<br>Sulamyta Moreira";
        $parte = substr($jogadora, 0, 5);
        echo $parte;

        $jogadora = "Sulamyta Moreira";
        $parte = substr($jogadora, 3, -3);
        echo $parte;
    ?>

</body>
</html>