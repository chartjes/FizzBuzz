<?php

require './fizzBuzz.php';

/**
 * Loop through the numbers from 1 to 100 and output the results of a 
 * Fizz-Buzz transform
 */

echo "FizzBuzzing the numbers 1 to 100\n\n";

for ($x = 1; $x <= 100; $x++) {
    echo fizzBuzzTransform($x) . "\n";
}

echo "\nDone\n";
