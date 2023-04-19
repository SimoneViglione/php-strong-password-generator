<?php
function generatePassword($length) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£$%&';
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
        echo "La tua password è: $password"; 
    }
}
?>