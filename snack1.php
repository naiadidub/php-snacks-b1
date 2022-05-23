<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php 
$partite = [
    [
        "casa" => "Milano",
        "ospite" => "Cantù",
        "punteggio" => "55-60",
    ],
    [
        "casa" => "Roma",
        "ospite" => "Tokyo",
        "punteggio" => "60-60",
    ],
    [
        "casa" => "New York",
        "ospite" => "Londra",
        "punteggio" => "30-50",
    ],
    [
        "casa" => "Parigi",
        "ospite" => "Berlino",
        "punteggio" => "40-50"
    ]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>
<h1> Snack 1 </h1>
<h2>Partite di basket 2022 :</h2>
    <p> 
    <?php   
        for($i=0; $i < count($partite); $i++){
            echo "{$partite[$i]["casa"]} - {$partite[$i]["ospite"]} | {$partite[$i]["punteggio"]} <br>";
        }  
        
    ?>
    </p>
</body>
</html>