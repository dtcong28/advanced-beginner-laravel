<?php

namespace App\Validators;

use App\Models\Administrator;

class AdministratorValidator extends CustomValidator
{
    protected $model = Administrator::class;

    public function validateLogin($params)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        return $this->_addRulesMessages($rules, [], false)->with($params)->passes();
    }
}
