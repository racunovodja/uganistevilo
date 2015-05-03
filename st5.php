<?php
// generate a random number for user to guess
if(isset($_POST['number'])) {
   $number = $_POST['number'];
} else {
   $number = rand(1,100);
}

if(isset($_POST["guess"])){

    // grab the user input guess
    $guess  = $_POST['guess'];
    $number  = $_POST['number'];
    if ($guess < $number){ 
    	echo "Guess Higher";
    }elseif($guess > $number){       
    	echo "Guess Lower";
    }elseif($guess == $number){      
    	echo "You got it!";
    }
    echo "<br />Random Number:".$number."<br />";
    echo $guess;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Guess A Number</title>
</head>

<body>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" name="guess-a-number">
    <label for="guess">Guess A Number:</label><br/ >
    <input type="text" name="guess" />
    <input name="number" type="hidden" value="<?= $number ?>" />
    <input name="submit" type="submit" />
</form>
</body>
</html>