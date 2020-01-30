<?php

// Single comment
# Single comment
/*
    Multiline
    comment
*/

# Variables
/*
    - prefix $
    - Start with letter or an underscore
    - Only letters, numbers and underscores
    - Case sensitive
*/

# Data Types
/*
    String
    Integers
    floats (decimals)
    Booleans
    Arrays
    Objects
    NULL
    Resource
*/
    $output = 'Hello World';

    // to concatonate 2 strings: 
    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 .''. $string2;
    $greeting2 = "$string1 $string2";

    // escape sequences
    $string3 = 'They\'re here';
    // or 
    $string3 = `They're here`;

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $float1 = 4.4;
    $bool1 = true;

    // constants (case sensitive unless set to 'true')
    define('GREETING', 'Hello Everyone');
echo $greeting;
