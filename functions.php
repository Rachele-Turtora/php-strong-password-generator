<?php
function generatePassword($length, $characters)
{
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $character_index = rand(0, count($characters) - 1);
        $password .= $characters[$character_index];
    }
    return $password;
}
