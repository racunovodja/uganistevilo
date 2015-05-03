<!DOCTYPE html>
<html>
    <title>Pretvori enote</title>
    <head><h1>Pretvori cm v m in obratno<h1></head>
<body>

<form action="pretvornik.php" method="POST">
    <div class="form-group">
        <label for="pretvornik">Vnesi cm:</label>
        <input type="integer" name="gost">
    </div>
    <button type="submit" class="btn btn-default">Potrdi</button>
</form>
</body>
</html>



<?php

// vnesi cm
if(isset($_POST["cm"])) {
   $cm = $_POST["cm"];
   }
echo "$cm je enako $cm/100 m";
echo "<br />"; 

// vnesi m
if(isset($_POST["m"])) {
   $m = $_POST["m"];
   }
echo "$m je enako $m*100 cm";
echo "<br />"; 





?>