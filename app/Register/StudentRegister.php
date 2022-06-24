<?php

namespace App\Register;

use Illuminate\Support\Str;


class StudentRegister
{

    private $joiningYear;
    private $currency;
    public function __construct($joiningYear, $currency)
    {
        $this->joiningYear = $joiningYear;
        $this->currency = $currency;
    }
    public function tutionFee($amount)
    {

        return [
            'tutionFee' => $amount,
            'confirmation_number' => Str::random(),
            'joiningYear' => $this->joiningYear,
            'currency' => $this->currency,
        ];
    }
}