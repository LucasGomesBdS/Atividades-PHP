<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            color: green;
        }
        td{
            border: 1px solid black;
            font-size: 200%;
        }
        table{
            border-collapse: collapse;
        }
        .green{
            color: green;

        }
        
    </style>
</head>
<body>
    <?php
    echo "<h1>Tabela com cores alternadas</h1>";
    echo "<table>";
    for($x=1; $x<=10; $x++){
        if ($x%2 ==0){
            echo "<tr><td class='green'>$x</td></tr>";
        }
        else{
          echo "<tr><td>$x</td></tr>";    

        }
     }
    echo "</Table>";
 
    ?>

    
</body>
</html>