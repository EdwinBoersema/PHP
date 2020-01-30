<?php

    # Conditionals

    /*
    ==  equals
    === equals + data type
    <   less then
    >   greater then
    <=  less or equal
    >=  equal or greater
    !=  is not
    !== not identical
    */

    # Logical operators

    /*
    && and
    || or
    xor (exclusive or, so only one)
    */

    # Switch

    $favColour = 'red';

    switch($favColour){
        case 'red':
            echo "Your favorite colour is red";
        break;
        case 'yellow':
            echo "Your favorite colour is yellow";
        break;
        case 'green':
            echo "Your favorite colour is green";
        break;
        case 'blue':
            echo "Your favorite colour is blue";
        break;
        default:
        echo "You don't have a favorite colour";
    }
