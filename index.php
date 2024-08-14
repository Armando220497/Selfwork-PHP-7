<?php
// Regole 

// 1. la password sia lunga almeno 8 caratteri
// 2. la password contenga almeno un numero
// 3. la password contenga almeno un carattere MAIUSCOLO
// 4. la password contenga almeno un carattere speciale ! @ # $

function checkLength($password)
{
    if (strlen($password) >= 8) {
        echo "La password e' lunga almeno 8 caratteri...\n";
        return true;
    } else {
        echo "La tua password deve essere almeno di 8 caratteri!\n";
        return false;
    }
}

function checkNumber($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            echo "La password contiene un numero...\n";
            return true;
        }
    }

    echo "La password deve contenere almeno un numero!\n";
    return false;
}

function checkUppercase($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            echo "La password contiene una maiuscola...\n";
            return true;
        }
    }

    echo "La password deve contenere almeno una maiuscola!\n";
    return false;
}

function checkSpecialChar($password)
{
    $special_chars = ["!", "@", "#", "$"];
    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $special_chars)) {
            echo "La password contiene un carattere speciale...\n";
            return true;
        }
    }

    echo "La password deve contenere almeno un carattere speciale!\n";
    return false;
}

function checkPassword()
{
    while (true) {
        $password = readline('Inserisci la password: ');

        $first_rule = checkLength($password);
        $second_rule = checkNumber($password);
        $third_rule = checkUppercase($password);
        $fourth_rule = checkSpecialChar($password);

        if ($first_rule && $second_rule && $third_rule && $fourth_rule) {
            echo "Password accettata!\n";
            break;
        } else {
            echo "Password rifiutata, riprova.\n";
        }
    }
}

checkPassword();
