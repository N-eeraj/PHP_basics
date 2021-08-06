<?php

    // hello world
    echo "<h1>PHP</h1>" . "Hello World" . "<br><hr>";

    // variables
    echo "<h2>Variables</h2>";
    $var1 = "I am a variable";
    echo $var1 . "<br>";
    $var2 = 5;
    echo $var2 . "<br><hr>";

    // string functions
    echo "<h2>String Functions</h2>";
    $str = "Hi Hello";
    echo "String: " . $str . "<br>";
    echo "String Length: " . strlen($str) . "<br>"; // string length
    echo "Words Count: " . str_word_count($str) . "<br>"; // words in a string
    echo "String Reverse: " . strrev($str) . "<br>"; // string reverse
    echo "Replace : " . str_replace("Hello", "Hey", $str) . "<br><hr>"; // replace

    // datatypes
    echo "<h2>Data Types</h2>";

    echo "<h3>Primitive</h3>";
    $string = "PHP Code"; // string
    var_dump($string);
    $int = 7; // integer
    var_dump($int);
    $float = 5.3; //float
    var_dump($float);
    $true = true; // bool
    $false = false; // bool
    var_dump($true);
    var_dump($false);
    $null = null;
    var_dump($null);
    echo "<br>";

    echo "<h3>Array</h3>";
    $array = array("One", "Two", "Three"); // array
    echo "Array<br>";
    var_dump($array);
    echo $array[0] . "<br>";
    echo $array[1] . "<br>";
    echo $array[2] . "<br>";
    $array = array("zero" => 0, "one" => 1, "two" => 2);
    var_dump($array);
    echo $array["zero"] . "<br>";
    echo $array["one"] . "<br>";
    echo $array["two"] . "<br><hr>";

    echo "<h2>Operators</h2>";

    // arithmetic operators
    echo "<h3>Arithmetic</h3>";
    echo "5 + 2 = " . (5 + 2) . "<br>"; // addition
    echo "10 - 2 = " . (10 - 2) . "<br>"; // subtraction
    echo "2 * 5 = " . ( 2 * 5) . "<br>"; // multiplication
    echo "10 / 2 = " . (10 / 2) . "<br>"; // division
    echo "10 % 3 = " . (10 % 3) . "<br><br>"; // modulus

    // assignment operators
    echo "<h3>Assignemnt</h3>";
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
    echo "<h3>Comparison</h3>";
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
    echo "<h3>Increment/Decrement</h3>";
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
    echo "<h3>Logical</h3>";
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
    echo "<h3>String Operators</h3>";
    $str1 = "Howdy";
    echo $str1 . "<br>";
    echo $str1 . " Partner" . "<br>";
    $str1 .= " Mate";
    echo $str1 . "<br><br>";

    // array operators
    echo "<h3>Array Operators</h3>";
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
    echo "<h3>Ternary</h3>";
    echo "25 < 100: ";
    echo (25 < 100? "True" : "False") . "<br>";
    echo "25 > 100: ";
    echo (25 > 100? "True" : "False") . "<br><hr>";

    // if statements
    echo "<h2>If Statements</h2>";
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
    echo "<br><hr>";

    // switch
    echo "<h2>Switch Statement</h2>";
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
    echo "<br><hr>";

    // loops
    echo "<h2>Loops</h2>";
    
        // while
    echo "<h3>While Loop</h3>";
    $i = 0;
    while ($i < 10)
        echo ++$i . "<br>";
    echo "<br>";

        // do while
    echo "<h3>Do While Loop</h3>";
    do
        echo ++$i . "<br>";
    while($i < 20);
    echo "<br>";

        // for
    echo "<h3>For Loop</h3>";
    for ($i = 1; $i < 11; $i++)
        echo $i . "<br>";
    echo "<br>";

        // for each
    echo "<h3>For Each Loop</h3>";
    var_dump($array);
    foreach ($array as $value)
        echo $value . "<br>";
    echo "<br><hr>";

    // break & continue statements
    echo "<h2>Break & Continue</h2>";
    $i = 0;
    while (true)
    {
        ++$i;
        if ($i == 10)
            break;
        if ($i % 2 == 0)
            continue;
        echo $i . "<br>";
    }
    echo "<hr>";

    // user defined functions
    echo "<h2>Functions</h2>";

        // simple function
    function fn1()
    {echo "Hello<br>";}
    fn1();

        // function with argument
    function fn2($name)
    {echo "Welcome $name<br>";}
    fn2("John");

        // function with return
    function fn3()
    {return 3.14;}
    echo fn3() . "<br>";

        // function with argument & return
    function fn4($arg1, $arg2)
    {
        echo "$arg1 + $arg2 = ";
        return $arg1 + $arg2;
    }
    echo fn4(10, 20) . "<br>";

        // function with default argument
    function fn5($name = "Person")
    {echo "Hello $name<br>";}
    fn5("Jason");
    fn5();
    echo "<hr>";

    // global keyword
    $x = 5;
    $y = 10;
    echo "<h2>Global Variable</h2>";
    echo $x . "<br>" . $y . "<br>";
    function fn6()
    {
        global $x;
        $x += 50;
        $y = 100;
    }
    fn6();
    echo $x . "<br>" . $y . "<br><hr>";

    // static keyword
    echo "<h2>Static Variable</h2>";
    function fn7()
    {
        static $a = 1;
        echo $a++;
        echo "<br>";
    }
    for($i=0; $i<10; $i++)
        fn7();
    echo "<br><hr>";

    // constants
    
    echo "<h2>Constants</h2>";
    define("PI", 3.14); // case sensitive by default
    echo "Pi is a constant of value: " . PI . "<br>";
    define("HELLO", "Hello World", true); // case insensitive is true
    echo hello;
    echo "<br><hr>";

    // arrays
    echo "<h2>Arrays</h2>";

        // indexed array
    $arr3 = array(1, 2, 3, 4, 5);
    foreach ($arr3 as $v)
        echo $v . " ";
    echo "<br>";

        // associative array
    $arr4 = array("a" => 1, "b" => 2, "c" => 3);
    var_dump($arr4);
    echo $arr4["a"] . " ";
    echo $arr4["b"] . " ";
    echo $arr4["c"];
    echo "<br>";

        // multidimensional array
    $multi_arr = array("Numbers" => array(1, 2, 3, 4, 5), 
                            "10 Multiples" => array(10, 20, 30, 40, 50), 
                            "10 Powers" => array(1, 10, 100, 1000, 10000));
    var_dump($multi_arr);
    foreach ($multi_arr as $arr)
    {
        var_dump($arr);
        foreach ($arr as $v)
            echo $v . " ";
    }
    echo "<br><br>";

    // array sorts
    echo "<h2>Sorting an Array</h2>";
    $arr5 = array(7,5,1,6,5,2,3);
    echo "Array: ";
    foreach($arr5 as $item)
        echo $item . " ";
    sort($arr5);
    echo "<br>";
    echo "Sorted Array: ";
    foreach($arr5 as $item)
        echo $item . " ";
    echo "<br>";
    echo "Reverse Sorted Array: ";
    rsort($arr5);
    foreach($arr5 as $item)
        echo $item . " ";
    echo "<br><br>";
    
    $arr6 = array("Goku", "Krillin", "Picolo", "Gohan", "Vegeta", "Trunks", "Goten");
    echo "Array: ";
    foreach($arr6 as $item)
        echo $item . " ";
    echo "<br>";
    sort($arr6);
    echo "Sorted Array: ";
    foreach($arr6 as $item)
        echo $item . " ";
    echo "<br>";
    echo "Reverse Sorted Array: ";
    rsort($arr6);
    foreach($arr6 as $item)
        echo $item . " ";
    echo "<br><br>";

        // sort by index & value in associative array
    $arr7 = array("E" => 50, "A" => 10, "G" => 70, "D" => 4, "B" => 2, "F" => 6, "C" => 30);
    echo "<h4>Array</h4>";
    var_dump($arr7);
    echo "<h4>Sorted by Index</h4>";
    ksort($arr7);
    var_dump($arr7);
    echo "<h4>Sorted by Values</h4>";
    asort($arr7);
    var_dump($arr7);
    echo "<h4>Sorted by Index Reverse</h4>";
    krsort($arr7);
    var_dump($arr7);
    echo "<h4>Sorted by Values Reverse</h4>";
    arsort($arr7);
    var_dump($arr7);
    echo "<br><hr>";

    // class & objects
    echo "<h2>Class & Objects</h2>";
    class Person
    {
        public $f_name;
        public $l_name;
        public $age;

        function __construct($fname, $lname, $yrs)
        {
            $this -> f_name = $fname;
            $this -> l_name = $lname;
            $this -> age = $yrs;
        }

        function fullName()
        {return $this -> f_name . " " . $this -> l_name;}

        function introduce()
        {echo "I am {$this -> fullName()} and I'm {$this -> age} years old." . "<br>";}
    }
    $dom = new Person("Domnic", "Toretto", 32);
    $dom -> introduce();
    $brian = new Person("Brian", "O'Conner", 30);
    $brian -> introduce();
    echo "<br>";

    // inheritance
    class SuperHero extends Person
    {
        public $hero;

        function __construct($fname, $lname, $yrs, $hero)
        {
            $this -> f_name = $fname;
            $this -> l_name = $lname;
            $this -> age = $yrs;
            $this -> hero = $hero;
        }

        function introduce()
        {echo "My name is {$this -> fullName()} and I am {$this -> hero}" . "<br>";}
    }

    $tony = new SuperHero("Tony", "Stark", 40, "Iron Man");
    $tony -> introduce();
    $bruce = new SuperHero("Bruce", "Wayne", 36, "Batman");
    $bruce -> introduce();
    echo "<br><br>";


?>