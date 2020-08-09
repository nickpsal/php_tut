<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numberList = array(23,64,147,88,92,'344','122','<h1>Hello</h1>');
        // print_r($numberList);
        echo $numberList[0];
        echo "<br>";
        $names = ["first_name"=>"nikos", "last_name"=>"psaltakis"];
        print_r($names);
        echo "<br>";
        echo $names["first_name"] . " " . $names["last_name"];
    ?>
</body>
</html>