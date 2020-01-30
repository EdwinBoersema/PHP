<?php
    // echo date('d');  //Day
    // echo date('m');  //Month
    // echo date('Y');  //Year
    // echo date('l);   //Day of the week
    // echo date('h');  //Hours
    // echo date('i');  //Minutes
    // echo date('s');  //Seconds
    // echo date('a'):  //AM or PM

    // Set time zone
    date_default_timezone_set('Europe/Amsterdam');

    echo date('h:i:a') . '<br>';

    echo date('d-m-Y'). '<br>';
  
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    // echo $timestamp;

    // to convert into normal date 
    // echo date('d-m-Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm June 22 2019');
    $timestamp3 = strtotime('tomorrow'); // gives the next day according to the timezone
    // echo $timestamp2;

    echo date('d-m-Y h:i:sa', $timestamp3);


?>