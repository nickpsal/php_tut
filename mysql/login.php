<?php
    include "db.php";
    include "functions.php";
    if (isset($_POST['submit'])) {
        login_user();
    }
?>

    <?php include "includes/header.php"?>
    
    <div class="container">
        <div class="col-sm-6">
        <H1 class="text-center">LOGIN USER</H1>
            <form action="login.php" method="post">
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