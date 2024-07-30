<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link ref="stylesheet" href="estilo.css" />
</head>
<body>
    <?php
     echo "<h1>Jogadores</h1>";
     echo "<table> <tr>";
     
     for($x=1 ; $x<=5; $x++){
      echo "<td> <img src= 'img/$x.jpg'<td>";
  
     } 
     echo "</table> </tr>";
     echo "<table> <tr>";
     
     for($x= 6; $x<= 10; $x++){
      echo "<td> <img src= 'img/$x.jpg'<td>";
  
     } 
     echo "</table> </tr>";
  


    ?>


</body>
</html>