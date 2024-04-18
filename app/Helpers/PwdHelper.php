<?php

namespace App\Helpers;

class PwdHelper
{
    public static function generatePassword($useSmallLetters = true, $useCapitalLetters = true, $useNumbers = true, $useSymbols = true, $minLength = 8)
    {
        $characters = '';

        if ($useSmallLetters) {
            $characters .= 'abcdefghijklmnopqrstuvwxyz';
        }
        if ($useCapitalLetters) {
            $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($useNumbers) {
            $characters .= '0123456789';
        }
        if ($useSymbols) {
            $characters .= '!#$%&()*+@^';
        }

        // Ensure the password length meets the minimum requirement
        $minLength = max($minLength, 1); // Ensure minimum length is at least 1
        $passwordLength = max($minLength, strlen($characters));

        // Generate the password
        $password = '';
        $maxIndex = strlen($characters) - 1;
        for ($i = 0; $i < $passwordLength; $i++) {
            $password .= $characters[rand(0, $maxIndex)];
        }

        return $password;
    }
}
