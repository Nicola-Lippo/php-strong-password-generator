<?php
include './functions.php'
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