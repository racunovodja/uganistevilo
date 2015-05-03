<!DOCTYPE html>
<html>
    <title>Ugani število</title>
    <head><h1>Ugani število med 1 in 100!</h1></head>
<body>

<form action="Uganistevilo.php" method="POST">
    <div class="form-group">
        <label for="Uganistevilo">Vnesi število:</label>
        <input type="integer" name="igralec">
    </div>
    <button type="submit" class="btn btn-default">Potrdi</button>
</form>
</body>
</html>

<?php

// generiraj naključno število
if(isset($_POST["stevilo"])) {
   $stevilo = $_POST["stevilo"];
} else {
   $stevilo = rand(1,100);
}

    echo "<br />";
    echo "<br />";
    echo "<br />";


if(isset($_POST["igralec"])) {

    // igralec vnese število
    $igralec  = $_POST["igralec"];
    
    if ($igralec < $stevilo) { 
    	echo "Prenizko število";
    }
    elseif($igralec > $stevilo) {       
    	echo "Previsoko število"; 
    }
    elseif($igralec == $stevilo) {      
    	echo "Uganil si!";
    }
    echo "<br />";
    echo "<br />Vnešeno število:".$igralec."<br />";
    echo "<br />";
    echo "<br />";
}

//števec

$stevec = 0;
$start = 1;
   // if ($igralec != $stevilo) {  
   // for($start; $start < $stevilo; $start++) {
   //     $stevec = $stevec + 1;   
   //     echo "<br />Števec:".$stevec."<br />";
   // }
   // }

?>






