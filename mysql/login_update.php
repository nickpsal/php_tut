<?php
    include "db.php";
    include "functions.php";
    if (isset($_POST['submit'])) {
       update_data();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Username and Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="col-sm-6">
        <H1 class="text-center">USER UPDATE CREDENTIALS</H1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                        <input type="text" name = "username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name = "password" class="form-control">
                </div>
                <div>ΕΠΙΛΟΓΗ ΧΡΗΣΤΗ ΠΟΥ ΘΕΣ ΝΑ ΑΛΛΑΞΕΙΣ ΟΝΟΜΑ ΧΡΗΣΤΗ ΚΑΙ ΚΩΔΙΚΟ</div>
                <div class="form-group">
                    <select name="id" id="">
                    <?php
                        show_all_data();
                    ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>