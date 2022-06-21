<?php
    $testo = "Volevo andare al mare ma alla fine sono andato in chiesa";
    $testo_censurato = "";

    $lunghezza_testo = strlen($testo);
    $lunghezza_testo_censurato = strlen($testo_censurato);


    $parola_censurata = str_replace('chiesa', '***', $testo);


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

<!-- 

Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 

-->

    <h1>
        VACANZE ALTERNATIVE
    </h1>
    <p>
        <?php echo $testo ?>
    </p>

    <i>
        Testo lungo <?php echo $lunghezza_testo ?> lettere.
    </i>

    <h2>Testo censurato</h2>

    <p>
        <?php echo $parola_censurata ?>
    </p>
  

</body>
</html>