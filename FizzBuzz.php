<?php

namespace FizzBuzz;

class FizzBuzz
{

    public function count(int $int): string
    {
        if ($int === 2) return "2";
        else if($int === 3) return "Fizz";

        return "1";
    }
}