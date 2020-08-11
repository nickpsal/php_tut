<?php
    //$num_to_guess = 42;
    $min = 1;
    $max = 1000;
	$randomvalue = mt_rand($min,$max);
	echo $randomvalue;
    $attemp = 0;
    if (!isset($_POST["guess"])) {
        $message = "Welcome to the guessing machine!";
    } else if ($_POST["guess"] > $randomvalue){
        $message = $_POST["guess"]." is too big! Try a smaller number.";
            ++$attemp;
    } else if ($_POST["guess"] < $randomvalue) {
        $message = $_POST["guess"]." is too small! Try a larger number.";
        $attemp++;
    } else { // must be equivalent
        $message = "You guessed the right number in" . $attemp . "attemps.";
    }
?>

<html>
<head>
<title>A PHP number guessing script</title>
</head>
<body>
<h1><?php echo $message; ?></h1>
<form action="number_game.php" method="POST">
<p><strong>Type your guess here:</strong>
<input type="text" type="hidden" name="randonvalue"></p>
<p><input type="submit" value="submit your guess"/></p>
</form>
</body>
</html>