<?php

    // setting local timezone
    date_default_timezone_set("Asia/Calcutta");

    // echoing date & time
    echo "Now:-<br>";
    echo date("d/m/Y"); // date in dd/mm/yyy
    echo "<br>";
    echo date("l"); // day name
    echo "<br>";
    echo date("h:i:s A"); // time in 12 hour
    echo "<br><br>";

    // making a time variable
    echo "Make time:-<br>";
    $date = mktime(16, 30, 0, 8, 15, 2021);
    echo date("d/m/Y l h:i:s A", $date);
    echo "<br><br>";

    // string to time
    echo "String to Time:-<br>";
    echo "Today: ";
    echo date("d/m/Y l", strtotime("today"));
    echo "<br>";
    echo "Tomorrow: ";
    echo date("d/m/y l", strtotime("tomorrow"));
    echo "<br>";
    echo "Yesterday: ";
    echo date("d/m/y l", strtotime("yesterday"));
    echo "<br>";
    echo "Next Sunday: ";
    echo date("d/m/Y l", strtotime("next sunday"));
    echo "<br>";
    echo "2 Days Ago: ";
    echo date("d/m/Y l", strtotime("-2 Days"));
    echo "<br>";
    echo "12 Days From Now: ";
    echo date("d/m/Y l", strtotime("+12 Days"));
    echo "<br>";
    echo "4 Weeks Ago: ";
    echo date("d/m/Y l", strtotime("-4 Weeks"));
    echo "<br>";
    echo "1 Week From Now: ";
    echo date("d/m/Y l", strtotime("+1 Weeks"));
    echo "<br>";
    echo "3 Year Ago: ";
    echo date("d/m/Y l", strtotime("-3 Years"));
    echo "<br><br>";


    // looping over dates
    echo "Sundays in August 2021 :-<br>";
    $start = strtotime("Aug 1 2021");
    echo "Start Date: ";
    echo date("d/m/Y", $start);
    echo "<br>";
    $end = strtotime("Sep 1 2021");
    echo "End Date: ";
    echo date("d/m/Y", $end);
    while ($start < $end)
    {
        echo "<br>";
        echo date("l:d", $start);
        $start = strtotime("+1 weeks", $start);
    }

?>