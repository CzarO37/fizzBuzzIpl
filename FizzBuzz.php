<?php

namespace FizzBuzz;

class FizzBuzz
{

    public function count(int $int): string
    {

        if($this->isMultipleOf3($int)) return "Fizz";
        else if($int === 5) return "Buzz";

        return (string) $int;
    }

    private function isMultipleOf3(int $int): bool
    {
        return $int % 3 === 0;
    }
}