<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $pswd = $_POST["pswd"];

        if (empty($_POST["uname"]))
            $username_error = "<br>Username can't be empty";
        if (empty($pswd))
            $password_error = "<br>Password can't be empty";
        elseif (strlen($pswd) < 8)
            $password_error = "<br>Password too short<br>Enter atleast 8 characters";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="uname" placeholder="Name">
        <span><?php if (isset($username_error)) echo $username_error; ?></span>
        <br><br>
        <input type="password" name="pswd" placeholder="Password">
        <span><?php if (isset($password_error)) echo $password_error; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>