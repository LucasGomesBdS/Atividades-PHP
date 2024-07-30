<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 </title>
    <style>
        h1{
            text-align: center;
            font-size: 200%;

        }
    </style>
</head>
<body>
    <?php
    //linha de números na vertical
    echo "<h1>Contando de 1 a 10</h1>";
    for($x=1; $x<=10; $x++){
        echo "$x <br>";
    }


     //tabela em uma linha horizontal
    echo "<h1>Tabela de números de 1 a 10</h1>";
    echo "<table><tr>";
    for ($x=1; $x<=10; $x++){
        echo "<td>$x</td>";
         
    }
    echo "<table><tr>";
   
    ?>
    



</body>
</html>