<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if(strlen($name) >= 3){
    // echo $name;
    $message='accesso riuscito';

}else{
    $message='accesso negato';
}

if(strpos($mail,'@') !== false && strpos($mail,'.') !== false){
    // echo $mail;
    $message='accesso riuscito';


}else{
    $message='accesso negato';

}

if(intval($age)){
    // echo $age;
    $message='accesso riuscito';


}else{
    $message = 'acesso negato';
    echo '';
}
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
<h1> Snack 2 </h1>
        <h2>Inserisci nome email e età</h2>

        <p><?php echo $message ?></p>
        
        <p> <?php echo "{$name} - {$mail} - {$age}"?> </p>
</body>
</html>