<!--Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
    $randomNumber = [];
    for ($i=0; $i < 15; $i++){
        $numero = rand(1, 30);
        if (!in_array($numero, $randomNumber)){
            echo $randomNumber = $numero; 
        }
 
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>