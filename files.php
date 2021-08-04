<?php

    // reading whole file
    $file = fopen("files/dummy.txt", "r") or die("Unable to open this file");
    echo fread($file, filesize("files/dummy.txt"));;
    fclose($file);
    echo "<br><br><br>";

    // reading file by line
    $file = fopen("files/dummy.txt", "r") or die("Unable to open this file");
    while (!feof($file))
        echo fgets($file) . "<br>";
    fclose($file);
    echo "<br><br>";

    // reading file by character
    $file = fopen("files/dummy.txt", "r") or die("Unable to open this file");
    while (!feof($file))
        echo fgetc($file);
    fclose($file);
    echo "<br><br>";

    // writing file
    $file = fopen("files/dummy2.txt", "w") or die("Unable to open this file");
    fwrite($file, "This file is written using PHP\n");
    fclose($file);

    $file = fopen("files/dummy2.txt", "r") or die("Unable to open this file");
    echo fread($file, filesize("files/dummy2.txt"));
    fclose($file);
    echo "<br><br>";

    // appending file
    $file = fopen("files/dummy.txt", "a") or die("Unable to open this file");
    fwrite($file, "\nAppended Line");
    fclose($file);

    $file = fopen("files/dummy.txt", "r") or die("Unable to open this file");
    while (!feof($file))
        echo fgets($file) . "<br>";
    fclose($file);

?>