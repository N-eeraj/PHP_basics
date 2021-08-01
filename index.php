<?php

    // hello world
    echo "Hello World";

    // variables
    $var1 = "I am a variable";
    echo $var1;
    $var2 = 5;
    echo $var2;

    // internal functions
    $str = "Hi Hello";
    echo $str;
    echo strlen($str); // string length
    echo str_word_count($str); // words in a string
    echo strrev($str); // string reverse
    echo str_replace("Hello", "Hey", $str); // replace

    // datatypes
    $string = "PHP Code"; // string
    echo $string;
    $int = 7; // integer
    echo $int;
    $float = 5.3; //float
    echo $float;

    $array = array("One", "Two", "Three"); // array
    echo $array[0];
    echo $array[1];
    echo $array[2];

?>