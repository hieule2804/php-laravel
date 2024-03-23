<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
    //như thế nào là pass
    // là biểu thức logic
    public function passes($attribute, mixed $value)
    {
        return strtoupper($value) === $value;
    }

    // giống interface java
    // thực thi các phương th
    public function message()
    {
        return 'the :attribute must be uppercase';
    }
}
