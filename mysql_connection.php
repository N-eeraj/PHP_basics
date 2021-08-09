<?php
    echo "Welcome back to PHP<hr>";

    $HOST = "localhost";
    $USER = "root";
    $PSWD = "";
    $DB = "test";

    $conn = new mysqli($HOST, $USER, $PSWD, $DB);

    $sql = "SELECT *FROM SQLBASICS";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        echo "<table border=1>";
        echo "<caption>Result</caption>";
        while($record = $result->fetch_assoc())
        {
            echo
                "<tr>
                    <td>{$record["Name"]}</td>
                    <td>{$record["CGPA"]}</td>
                    <td>{$record["Skills"]}</td>
                    <td>{$record["language"]}</td>
                </tr>";
        }
        echo "</table>";
    }
    else
        echo "0 Results";

?>