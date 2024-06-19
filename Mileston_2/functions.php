<?php
//richiamo variabili del form
$pw = $_GET['pw'];
//caratteri password(Array di elementi)
$caratteri = [
    'abcdefghilmnopqrstuvz',
    'ABCDEFGHILMNOPQRSTUVZ',
    '123456789',
    '!?£%&/()',
];
//creazione pasword
//inizializzo una variabile di partenza con stringa vuota
$passwor = '';
for ($i = 0; $i < $pw; $i++) {
    //variabile associata una funzione che crea un numero randomico da 0 a 3 come gli elementi nel mio Array
    $pesca = rand(0, 3);
    //definisco la lunghezza dei miei elementi 
    $last = strlen($caratteri[$pesca]) - 1;
    //.= per concatenare le stringhe
    $passwor .= $caratteri[$pesca][rand(0, $last)];
};
