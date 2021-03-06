<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Cuenta;

class MontoAceptado implements Rule
{

    private $cuenta;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($cuenta)
    {
        $this->cuenta = $cuenta;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $cuenta = Cuenta::where('num_cuenta', $this->cuenta)->first();
        return $cuenta ? $cuenta->saldo >= $value : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Saldo insuficiente';
    }
}
