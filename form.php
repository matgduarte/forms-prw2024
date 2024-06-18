<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/TPH.png" type="image/x-icon">
    <title>Tropical Palace Hotel</title>
</head>

<body>
<?php
    $x1 = $_GET['velocidade'];
    $x2 = $_GET['distancia'];
    $x3 = $_GET['consumo'];

    $x4 = $x2 / $x1;
    $x5 = number_format($x2 / $x3,2,'.','');

    echo("Total horas: ". $x4);
    echo("Total combustivel: ". $x5);
   

?>
</body>
</html>