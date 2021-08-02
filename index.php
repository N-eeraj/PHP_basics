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
    var_dump($array);
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

    // string operators
    $str1 = "Howdy";
    echo $str1 . "<br>";
    echo $str1 . " Partner" . "<br>";
    $str1 .= " Mate";
    echo $str1 . "<br><br>";

    // array operators
    $arr1 = array(1, 2, 3);
    var_dump($arr1);
    $arr2 = array("1", "2", "3", "4", "5");
    var_dump($arr2);
    var_dump($arr1 + $arr2);
    echo 'array(1, 2, 3) == array("1", "2", "3"): ' . ($arr1 == array("1", "2", "3")) . "<br>";
    echo 'array(1, 2, 3) === array(1, 2, 3): ' . ($arr1 === array(1, 2, 3)) . "<br>";
    echo 'array(1, 2, 3) != array("1", "2", "3", "4", "5"): ' . ($arr1 != $arr2) . "<br>";
    echo 'array(1, 2, 3) <> array("1", "2", "3", "4", "5"): ' . ($arr1 <> $arr2) . "<br>";
    echo 'array(1, 2, 3) !== array("1", "2", "3"): ' . ($arr1 !== array("1", "2", "3")) . "<br><br>";

    // ternary operator
    echo "25 < 100: ";
    echo (25 < 100? "True" : "False") . "<br>";
    echo "25 > 100: ";
    echo (25 > 100? "True" : "False") . "<br><br>";

    // if statements
    $int1 = 10;
    echo "int1: " . $int1 . "<br>";
        // simple if
    if ($int1 > 5)
        echo "int1 > 5" . "<br>";
        // if else
    if ($int1 > 20)
        echo "int1 > 20";
    else
        echo "int1 < 20";
    echo "<br>";
        // if elseif else
    if ($int1 > 0)
        echo "Positive";
    elseif ($int1 < 0)
        echo "Negative";
    else
        echo "Zero";
    echo "<br><br>";

    // switch
    $int2 = 5;
    echo "int2: " . $int2 . "<br>";
    switch ($int2)
    {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Firday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid";
    }
    echo "<br><br>";

    // loops
    
        // while
    $i = 0;
    while ($i < 10)
        echo ++$i . "<br>";
    echo "<br>";

        // do while
    do
        echo ++$i . "<br>";
    while($i < 20);
    echo "<br>";

        // for
    for ($i = 1; $i < 11; $i++)
        echo $i . "<br>";
    echo "<br>";

        // for each
    var_dump($array);
    foreach ($array as $value)
        echo $value . "<br>";
    echo "<br><br>";

?>