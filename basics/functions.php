<?php
    #Functions => code that can be called

    /*
    accepted naming: 
    - Camel Case
    - Lower Case
    - Pascal Case
    */

    // create function
    function simpleFunction(){
        echo 'Hello World';
    };

    // call function
    simpleFunction();

    // with parameter ($param = default)
    function sayName($name = 'World'){
        echo 'Hello ' . $name;
    };

    sayName('Jonathan');

?>
