<?php

function fizzBuzzTransform($input)
{
    if (!is_int($input)) {
        return 0;
    }
    
    $output = '';

    if ($input % 3 == 0) {
        $output .= 'Fizz';
    }

    if ($input % 5 == 0) {
        $output .= 'Buzz';
    }

    if ($output == '') {
        return $input;
    }

    return $output;
}
