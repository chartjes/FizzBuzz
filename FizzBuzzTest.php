<?php

/**
 * Unit test for FizzBuzzTransform function
 *
 * @author Chris Hartjes
 */

require './fizzBuzz.php';

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testFizzBuzz()
    {
        $this->assertEquals('Fizz', fizzBuzzTransform(3), 'Multiples of 3 should return Fizz');
        $this->assertEquals('Buzz', fizzBuzzTransform(5), 'Multiples of 5 should return Buzz');
        $this->assertEquals('FizzBuzz', fizzBuzzTransform(15), 'Multiples of 3 and 5 should return FizzBuzz');
        $this->assertEquals(103, fizzBuzzTransform(103), 'Non-multiples of 3 or 5 should return input');
        $this->assertEquals(0, fizzBuzzTransform('FizzBuzz'), 'Non-integers should return 0');
    }
}
