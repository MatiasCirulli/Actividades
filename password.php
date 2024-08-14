<?php 
//contraseña de 8 caracteres *
//una mayuscula y una minuscula minimo
//caracter especial
//numeros

$badPassword = 'mal';
$goodPassword = 'EstoBien1_';


function length8($text) {
    if (strlen($text) < 8) {
        echo 'Su contraseña debe tener minimo 8 caracteres <br>';
        return false;
    }else{
        return true;
    }
}

function checkUpper($text) {
    $abecedarioUpper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $abecedarioUpper)) {
            return true; 
        } else {
            echo 'Su contraseña debe contener minimo una letra mayuscula <br>';
            return false;
        }
    }
}

function checkLower($text) {
    $abecedarioLower = ['a','b','c','d','e','f','g','h','i','j','k','l', 'ñ','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $abecedarioLower)) {
            return true; 
        } else {
            echo 'Su contraseña debe contener minimo una letra minuscula <br>';
            return false;
        }
    }
}

function checkSpecialCharacters($text) {
    $specialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '-', '.', '~', '|', '<', '>', '=', '-', '_', '/', ':', ';', '?', '[', ']', '{', '}', '~'];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $specialCharacters)) {
            return true; 
        } else {
            echo 'Su contraseña debe contener minimo un caracter especial <br>';
            return false;
        }
    }
}

function checkNumbers($text) {
    $numeros = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    for ($i = 0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $numeros)) {
            return true; 
        } else {
            echo 'Su contraseña debe contener minimo un numero <br>';
            return false;
        }
    }
}

function validPassword($text) {
    checkNumbers($text);
    checkLower($text);
    checkUpper($text);
    checkSpecialCharacters($text);
}

validPassword($badPassword);
validPassword($goodPassword);








