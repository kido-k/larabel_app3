<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateValidate ($attribute, $value, $parameters){
        return $value % 2 == 0;
    }
}
