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
    echo $array[2] . "<br>";
    $array = array("zero" => 0, "one" => 1, "two" => 2);
    var_dump($array);
    echo $array["zero"] . "<br>";
    echo $array["one"] . "<br>";
    echo $array["two"] . "<br><br>";

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

    // break & continue statements
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
    echo "<br>";

    // user defined functions

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
    echo "<br>";

    // global keyword
    $x = 5;
    $y = 10;
    echo "Global Variable<br>";
    echo $x . "<br>" . $y . "<br>";
    function fn6()
    {
        global $x;
        $x += 50;
        $y = 100;
    }
    fn6();
    echo $x . "<br>" . $y . "<br><br>";

    // static keyword
    echo "Static Variable<br>";
    function fn7()
    {
        static $a = 1;
        echo $a++;
        echo "<br>";
    }
    for($i=0; $i<10; $i++)
        fn7();
    echo "<br><br>";

    // constants
    define("PI", 3.14);
    echo "Pi is a constant of value: " . PI;
    echo "<br><br>";

    // arrays

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

    // class & objects
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