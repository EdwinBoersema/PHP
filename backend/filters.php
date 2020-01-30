<?php
    // Check for posted data
    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }

    // if(filter_has_var(INPUT_POST, 'data')){
    //     $email = $_POST['data']; 
    //     // remove illegal characters
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email . '<br>';

    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         echo 'Email is valid';
    //     } else {
    //         echo 'Email is not valid';
    //     }
    // };

    // $var = 23;

    // if(filter_var($var, FILTER_VALIDATE_INT)){
    //     echo $var . ' is a number';
    // } else {
    //     echo $var . ' is not a number';
    // };

    // $var = '24f523a4we5f23e45';
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    # checks if values respond to true if used in a filter function
    // $filters = [
    //     "data" => FILTER_VALIDATE_EMAIL,
    //     "data2" => [
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => [
    //             "min" => 1,
    //             "max" => 100
    //         ]
    //     ]
    // ];

    $arr = [
        "name" => "john newton",
        "age" => "35",
        "email" => "jnewton@email.com"
    ];

    $filters = [
        "name" => [
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ],
        "age" => [
            "filter" => FILTER_VALIDATE_INT,
            "options" => [
                "min" => 1,
                "max" => 125
            ]
        ],
        "email" => FILTER_VALIDATE_EMAIL
    ];
    
    $id = (filter_var_array($arr, $filters));
    foreach($id as $field) {
        echo $field . '<br>';
    };
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>

