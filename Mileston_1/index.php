<?php
//richiamo variabili del form
$pw = $_GET['pw'];
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
                <button>Cerca</button>
            </div>
        </form>
        <div>
            <div>La lunghezza scelta è <span><?php echo $pw; ?></span></div>
        </div>
    </div>
</body>

</html>