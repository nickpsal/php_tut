<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function add_Numbers($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }
        $sum = add_Numbers(100,150);
        echo $sum;
        echo "<br>";
        $sum = add_Numbers($sum,100);
        echo $sum;
    ?>
</body>
</html>