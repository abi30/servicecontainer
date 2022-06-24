<?php

namespace App\Register;

use Illuminate\Support\Str;


class TeacherRegister
{

    private $joiningYear;
    private $currency;
    public function __construct($joiningYear, $currency)
    {
        $this->joiningYear = $joiningYear;
        $this->currency = $currency;
    }
    public function salary($amount)
    {

        return [
            'salaray' => $amount,
            'confirmation_number' => Str::random(),
            'joiningYear' => $this->joiningYear,
            'currency' => $this->currency,
        ];
    }
}