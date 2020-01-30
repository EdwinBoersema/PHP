<?php
    # Holds multiple values
    /* 
    - Indexed
    - Associative
    - Multi-dimensional
    */

    // Indexed (starts at 0)

    $people = array('Kevin', 'James', 'Sarah');
    $ids = [12, 14, 94];
    $cars = ['Honda', 'Toyota', 'Audi'];
    // to add to array:
    $cars[] = 'BMW';

    // count total in array:
    // echo count($cars);

    // print array:
    // print_r($cars);
    
    // print single value:
    // echo $cars[1];

    # Associative arrays
    $people = ['Brad' => 35, 'Jose' => 45, 'William' => 37];
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    // echo $people['Brad'];

    // add to associative array:
    $people['Jill'] = 42;

    //print_r($people);
    //var_dump($people);

    # Multi-dimensional arrays
    $cars = [
        ['Honda', 42, 10],
        ['Toyota', 23, 34],
        ['Audi', 456, 23]
    ];
    echo $cars[2][0]; // prints out 'Audi'
?>