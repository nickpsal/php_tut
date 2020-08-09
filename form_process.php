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