<?php

    mysql_connect("localhost", "root", "");
    mysql_select_db("test");

    if(isset($_POST["username"]))
    {
        $uname = $_POST["username"];
        $pswd = $_POST["password"];

        $querry = "SELECT * FROM phpLogin WHERE USERNAME='".$uname."' AND PASSWORD='".$pswd."' limit 1";
        $result = mysql_query($querry);

        $login = mysql_num_rows($result) == 1? "Login Successful": "Invalid Credentials";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>

    <form action="#" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
        <span><?php if (isset($login)) echo $login ?></span>
    </form>

    <button onclick="login()">Show Login Details</button>

</body>
<script>const login = ()=> alert("Username: username\nPassword: password");</script>
</html>