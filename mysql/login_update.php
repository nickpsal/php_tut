<?php
    include "db.php";
    include "functions.php";
    if (isset($_POST['submit'])) {
       update_data();
    }
?>
    <?php include "includes/header.php"?>;   
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
                    <select name="old_username" id="">
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