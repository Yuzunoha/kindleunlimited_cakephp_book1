<?php

namespace App\Model\Validation;

use Cake\Validation\Validation;

class CustomValidation extends Validation
{
    public static function validateUsername(string $username): bool
    {
        return stripos($username, 'admin') !== 0;
    }
}
