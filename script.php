<?php

function generate_password($number){
    $password = '';
    $letters = 'qwertyuioplkjhgfdsazxcvbnm';
    $numbers = '1234567890';
    $symbols = '|\!"£$%&/()=?^.:,;-_';
    // vado di concatenazione stringhe
    $characters = $letters . strtoupper($letters) . $numbers . $symbols;
    // calcolo la lunghezza totale di questa stringa nuova
    $full_characters = mb_strlen($characters);
    // fintanto che la lunghezza della password che devo generare è inferiore al numero richiesto dall'utente continuo a randomizzare i characters
    while(mb_strlen($password) < $number){
        // prendo un indice a caso dal full
        $random_index = rand(0, $full_characters - 1);
        // prendo un carattere a caso con l'ausilio del random index
        $random_character = $characters[$random_index];
        $password .= $random_character; 
    }
    return $password;
}