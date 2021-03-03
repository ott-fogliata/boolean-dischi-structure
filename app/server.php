<?php

// 2nd milestone:
// farà il json encode del mio database. => require_once
// ricordatevi dell'header (vedi le slide)


// Controller => Entità che gestisce le chiamate (a seconda della rotta e dei parametri) e sa ogni volta come rispondere
// cioè dove andare a prendere il dato, come elaborarlo, se tipo prima di rispondere deve chiamare un'altra funzione e così via.
// E' il punto di accesso HTTP per la vostra applicazione.


// ESERCITAZIONE SU isset/empty
//$var = [];
$var = '';

var_dump($var);
echo '<br/><br/>';

if ($var == true) {
    echo 'è true <br/>';
}

if ($var == false) {
    echo 'è false <br/>';
}

if (!$var) {
    echo 'è not <br/>';
}

if (isset($var)) {
    echo 'è settato <br/>';
}

if (!isset($var)) {
    echo 'non è settato <br/>';
}

if (empty($var)) {
    echo 'è vuoto <br/>';
}

if (!empty($var)) {
    echo 'non è vuoto <br/>';
}


echo '--------<br/>';


print_r($_GET);
//echo $_GET["genere"] . '<br/>';

//if(!empty($_GET['genere'])) {
//    echo 'il genere non è vuoto';
//} else {
//    echo 'il genere è vuoto';
//}


//if(isset($_GET['genere'])) {
//    echo 'il genere esiste';
//} else {  // !isset()
//    echo 'il genere non esiste (non è stato settato)';
//}


//if (array_key_exists('genere', $_GET)) {
//    echo 'il genere esiste ';
//
//    if (!empty($_GET['genere'])) {
//        echo 'ed è pieno';
//    } else {
//        echo 'ed è vuoto';
//    }
//
//} else {
//    echo 'il genere non esiste';
//}


if (!empty($_GET['genere'])) {
    echo 'il genere esiste ed è pieno';

} else {
    echo 'qualcosa è andato storto';
}


// come rispondere con un http code da gestire in axios
// http_response_code(400);  // bad request.

// su axios, gestite quindi l'eccezione --> https://github.com/axios/axios#example
// usa il catch.