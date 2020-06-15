<!-- predisporre una variabile contenente un breve testo -->
<!-- censurare una "badword" che viene passata in GET con *** (3 simboli di asterico) -->
<!-- Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso -->

<?php

    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.';
//recupero la parola da censurare
    $bad_words = $_GET['word'];
//con la funzione str_replace sostituisco con tre asterischi tutte le occorrenze di quella parola nel testo
    $censored = str_replace($bad_words, '***', $text);
//stampo il testo censurato
        // echo($censored);
//con la funzione strlen calcolo la lunghezza della stringa
    $string_length = strlen($censored);
//stampo la lunghezza della stringa
        // echo($string_length);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bad Words</title>
    </head>
    <body>
        <p>
            <?php echo $censored; echo $string_length; ?>
        </p>
    </body>
</html>
