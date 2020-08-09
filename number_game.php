<?php
    $computer_number = mt_srand(1,100);
    if (isset($_POST['submit'])) {
        if ($_POST['number'] != "" ) {
            $player_number = $_POST['number'];
            echo $computer_number;
            echo "<br>";
            echo $player_number;
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
    <form action="number_game.php" method="post">
        <input type="text" name = "number" placeholder = "Enter Username"><br>
        <input type="submit" name="submit"><br>
    </form>
</body>
</html>