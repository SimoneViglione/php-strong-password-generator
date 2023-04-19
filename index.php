<?php
function generatePassword($length) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-=+;:,.?';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($chars) - 1);
        $password .= $chars[$index];
    }
    return $password;
}

if (isset($_GET['length'])) {
    $length = (int)$_GET['length'];
    if ($length > 0) {
        $password = generatePassword($length);
        echo "Your password is: $password"; 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Password generator </title>
</head>
<body>
    <h1> Generatore di Password </h1>

    <form action="index.php" method="get">
        <label for="lunghezza">Lunghezza password:</label>
        <input type="number" id="lunghezza" name="length" />

        <button type="submit" value="Genera password"> Genera Password </button>
    </form>
</body>
</html>
