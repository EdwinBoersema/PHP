<?php
    # Loops => execute code set number of times

    /*
    For
    While
    Do.. While
    Foreach
    */

    #For loop
    # @params - initialize, condition, increment

    for($i = 0; $i <10; $i++){
        echo $i;
        echo '<br>';
    };

    #While loop
    # @params - condition

    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    };

    # Do..While 
    # @params - condition

    do{
        echo $i;
        echo '<br>';
        $i++;
    }
    while($i <10);

    #Foreach

    // $people = ['Brad', 'Jose', 'William'];

    // foreach($people as $person){
    //     echo $person;
    //     echo '<br>';
    // }

    // for multi-dimensional arrays

    $people = ['Brad' => 'brad@gmail.com', 'Jose' => 'jose@email.com', 'William' => 'william@outlook.com'];

    foreach($people as $person => $email){
        echo $person . ': ' . $email;
        echo '<br>';
    };
?>