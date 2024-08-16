<?php 
//contraseña de 8 caracteres *
//una mayuscula y una minuscula minimo
//caracter especial
//numeros

$badPassword = 'mal';
$goodPassword = 'EstoBien1_';



function length8($text) {
    return (strlen($text) > 8);
}

function checkUpper($text) {
    $abecedarioUpper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $upperEncontrados = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $abecedarioUpper)) {
            $upperEncontrados[$i] = $text[$i];
        } 
    }
    return (sizeof($upperEncontrados) > 0);
}

function checkLower($text) {
    $abecedarioLower = ['a','b','c','d','e','f','g','h','i','j','k','l', 'ñ','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $lowerEncontrados = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $abecedarioLower)) {
            $lowerEncontrados[$i] = $text[$i];
        } 
    }
    return (sizeof($lowerEncontrados) > 0);
}

function checkSpecialCharacters($text) {
    $specialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '-', '.', '~', '|', '<', '>', '=', '-', '_', '/', ':', ';', '?', '[', ']', '{', '}', '~'];
    $specialCharactersEncontrados = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $specialCharacters)) {
            $specialCharactersEncontrados[$i] = $text[$i];
        } 
    }
    return (sizeof($specialCharactersEncontrados) > 0);
}

function checkNumbers($text) {
    $numeros = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $numerosEncontrados = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $numeros)) {
            $numerosEncontrados[$i] = $text[$i];
        } 
    }
    return (sizeof($numerosEncontrados) > 0);
}

function validPassword($text) {
    return (checkNumbers($text) && checkLower($text) && checkUpper($text) && checkSpecialCharacters($text));
}

function validValidPassword($text) {
    if (validPassword($text) == false) {
        echo 'Contraseña invalida';
    }
}



validValidPassword($badPassword);
echo '<div>Diferenciemo password</div>';
validValidPassword($goodPassword);








