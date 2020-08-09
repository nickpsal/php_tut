<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num1 = 30;
        $num2 = 30;
        $num3 = "30";
        $num4 = "30";
        if($num1 < $num2) {
            echo "The num1 is smaller than num2";
        }else if ($num2 < $num1){
            echo "The num2 is smaller than num1";
        }else if ($num1 == $num3){
            echo "The num1 is equal with the num2";
        }
        echo "<br>";
        if ($num4 === $num3) {
            echo "the num3 is identical with thw num4";
        }

        $numbers = [12,35,46,55,61,78,88,95];
        echo "<br>";
        foreach($numbers as $number) {
            echo $number . "<br>";
        }
    ?>
</body>
</html>