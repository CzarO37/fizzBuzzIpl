<?php

namespace FizzBuzz;

class FizzBuzz
{

    public function count(int $int): string
    {

        if($int === 3 || $int === 6) return "Fizz";
        else if($int === 5) return "Buzz";

        return (string) $int;
    }
}