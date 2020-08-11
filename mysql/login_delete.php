<?php
    include "db.php";
    include "functions.php";
    if (isset($_POST['submit'])) {
       delete_data();
    }
?>

    <?php include "includes/header.php"?>
    
    <div class="container">
        <div class="col-sm-6">
        <H1 class="text-center">DELETE USER</H1>
            <form action="login_delete.php" method="post">
                <div>ΕΠΙΛΟΓΗ ΧΡΗΣΤΗ ΠΟΥ ΘΕΣ ΝΑ ΔΙΑΓΡΑΨΕΙΣ</div>
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