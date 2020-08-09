<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username && $password) {
            echo "Yes it works <br>";
            echo "<br>";
            $conn = mysqli_connect('localhost', 'nickpsal', 'ospzx3vu!@34', 'login_app');
            if ($conn) {
                echo "Connected succefull";
            }else {
                die("Database Connection failed");
            }
        }
        $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed " . mysqli_error());
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="col-sm-6">
            <form action="sign-up.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name = "username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name = "password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

</body>
</html>