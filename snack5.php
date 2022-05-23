<!--Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.-->
<?php
$paragrafo = 'In attesa di incontrarvi, vi annuncio che saro pronto a contattarvi telefonicamente la prossima settimana per fissare un incontro, quando e dove preferirete. Nell’attesa, non esitate a contattarmi tramite il numero di telefono che ho allegato oppure via email. Grazie per la vostra attenzione.
Sarei lieto di incontrarvi per discutere delle mie competenze e di come queste possano rispondere a quanto richiesto dalla vostra azienda. Vi contattero telefonicamente la prossima settimana per concordare un incontro. Grazie per la vostra cortese attenzione.';
$paragraphs = explode(".", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mai cosi educato</title>
</head>
<body>
    <h1>Snack 5</h1>
    <?php for($i=0; $i < count($paragraphs); $i++){?>
        <p><?php echo $paragraphs[$i] ?></p>
        <?php }?>
</body>
</html>