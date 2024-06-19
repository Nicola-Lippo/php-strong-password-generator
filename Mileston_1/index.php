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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div>
        <h1>Strong Password Generator</h1>
        <!--FORM-->
        <form action="index.php" method="$_GET">
            <!--Campi di input-->
            <div>
                <label for="text-area">Lunghezza caratteri</label>
                <!-- Attributo name-->
                <input type="text" id="text-area" name="pw">
            </div>
            <!--Bottone-->
            <div>
                <button>Invia</button>
            </div>
        </form>
        <div>
            <div>La lunghezza scelta è <span><?php echo $pw; ?></span></div>
            <div>La password scelta è <span><?php echo $passwor; ?></span></div>
        </div>
    </div>
</body>

</html>