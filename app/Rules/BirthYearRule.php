<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class BirthYearRule implements Rule {
    public function passes($attribute, $value) {
        // Check if the date of birth is at least 18 years ago
        return \Carbon\Carbon::parse($value)->addYears(18)->isPast();
    }

    public function message() {
        return 'The :attribute must be at least 18 years old.';
    }
}
