<?php

namespace App\Rules;

use App\Race;
use Illuminate\Contracts\Validation\Rule;

class ExistsRace implements Rule
{
    private $races;
    
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->races = Race::all();
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
        return $this->races->where('name', $value)->first();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Unknown race.';
    }
}
