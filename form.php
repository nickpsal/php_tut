<?php
    if (isset($_POST['submit'])) {
        if ($_POST['username'] != "" || $_POST['password'] != "" ) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            echo "Yes it works <br>";
            echo "<br>";
            echo $username;
            echo "<br>";
            echo $password;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" name = "username" placeholder = "Enter Username"><br>
        <input type="password" name = "password" placeholder = "Enter Password"><br>
        <input type="submit" name="submit"><br>
    </form>
</body>
</html>