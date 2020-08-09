<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [77,14,95,10,5,98,67,58,32,44,55];
        echo max($array);
        echo "<br>";
        echo min($array);
        echo "<br>";
        sort($array);
        print_r($array);
    ?>
</body>
</html>