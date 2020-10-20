<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function test_Count_given1_shouldReturn1() {
        //Arrange
        $fizzBuzz = new FizzBuzz();

        //Act
        $actual = $fizzBuzz->count(1);

        //Assert
        $this->assertEquals(1,$actual);
    }
}
