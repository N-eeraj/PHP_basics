<?php

    // hello world
    echo "Hello World" . "<br><br>";

    // variables
    $var1 = "I am a variable";
    echo $var1 . "<br>";
    $var2 = 5;
    echo $var2 . "<br><br>";

    // internal functions
    $str = "Hi Hello";
    echo "String: " . $str . "<br>";
    echo "String Length: " . strlen($str) . "<br>"; // string length
    echo "Words Count: " . str_word_count($str) . "<br>"; // words in a string
    echo "String Reverse: " . strrev($str) . "<br>"; // string reverse
    echo "Replace : " . str_replace("Hello", "Hey", $str) . "<br><br>"; // replace

    // datatypes
    $string = "PHP Code"; // string
    echo "String: " . $string . "<br>";
    $int = 7; // integer
    echo "Integer: " . $int . "<br>";
    $float = 5.3; //float
    echo "Float: " . $float . "<br><br>";

    $array = array("One", "Two", "Three"); // array
    echo "Array<br>";
    echo $array[0] . "<br>";
    echo $array[1] . "<br>";
    echo $array[2] . "<br><br>";

    // arithmetic operaters
    echo "5 + 2 = " . (5 + 2) . "<br>"; // addition
    echo "10 - 2 = " . (10 - 2) . "<br>"; // subtraction
    echo "2 * 5 = " . ( 2 * 5) . "<br>"; // multiplication
    echo "10 / 2 = " . (10 / 2) . "<br>"; // division
    echo "10 % 3 = " . (10 % 3) . "<br><br>"; // modulus

    // assignment operators
    $var3 = 5;
    echo $var3;
    $var3 += 2;
    echo "+= 2: ";
    echo $var3;
    $var3 -= 2;
    echo "-= 2: ";
    echo $var3;
    $var3 *= 2;
    echo "*= 2: ";
    echo $var3;
    $var3 /= 5;
    echo "/= 5: ";
    echo $var3;
    $var3 %= 2;
    echo "%= 2: ";
    echo $var3 . "<br><br>";

    // comparison operators
    echo '5 == "5": ';
    echo (5 == "5") . "<br>"; // is equal
    echo '3 != 5": ';
    echo (3 != 5) . "<br>"; //  not equal
    echo '3 === 3: ';
    echo (3 === 3) . "<br>"; // identical
    echo '2 !== 3: ';
    echo (2 !== 3) . "<br>"; // not identical
    echo '3 < 5: ';
    echo (3 < 5) . "<br>"; // less than
    echo '7 > 2: ';
    echo (7 > 2) . "<br>"; // greater than
    echo '4 <= 4: ';
    echo (4 <= 4) . "<br>"; // less than or equal to
    echo '5 >= 5: ';
    echo (5 >= 5) . "<br><br>"; // greater than or equal to

    // increment / decrement operators
    $var4 = 5;
    echo $var4 . "<br>";
    echo $var4 . "++: ";
    echo $var4++ . "<br>"; // post increment
    echo "++" . $var4 . ": ";
    echo ++$var4 . "<br>"; // pre increment
    echo $var4 . "--: ";
    echo $var4-- . "<br>"; // post decrement
    echo "--" . $var4 . ": ";
    echo --$var4 . "<br><br>"; // pre decrement

    // logical operators
    echo "true and true: ";
    echo (true and true) . "<br>";
    echo "true && true: ";
    echo (true && true) . "<br>";
    echo "true or false: ";
    echo (true or false) . "<br>";
    echo "true || false: ";
    echo (true || false) . "<br>";
    echo "true xor false: ";
    echo (true xor false) . "<br><br>";

?>