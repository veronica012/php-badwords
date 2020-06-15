<!-- predisporre una variabile contenente un breve testo -->
<!-- censurare una "badword" che viene passata in GET con *** (3 simboli di asterico) -->
<!-- Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso -->

<?php

    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.';

    $bad_words = $_GET ['word'];
    $censored = str_replace($bad_words, '***', $testo);
    echo $censored;

?>
