<?php
session_start();

function generatePassword($length, $characters)
{
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $character_index = rand(0, count($characters) - 1);
        if ($_SESSION['repetition'] == 'yes') {
            $password .= $characters[$character_index];
        } else {
            while (str_contains($password, $characters[$character_index])) {
                $character_index = rand(0, count($characters) - 1);
            }
            $password .= $characters[$character_index];
        }
    }
    return $password;
}
