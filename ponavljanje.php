<?php
    echo "Hi, today is: ".date('1');
    echo "<br />";
    echo "<br />";
        
    echo "Pozdravljen, Robert";

    echo "<br />";
    echo 2 + 3;
    echo "<br />";
    echo 2*3;
    echo "<br />";
    echo 2/3;
    echo "<br />";
    echo 2-3;
    echo "<br />";

    $mojeIme ="Robert";
    echo "$mojeIme";
    echo "<br />";

    $stA = 3;
    $stB = 5;
if ($stA > $stB) {
    echo "Število ".$stA." je večje od ".$stB ;
}
else {
    echo "Število ".$stA." ni večje od ".$stB;
}

   
    echo "<br />";
    echo "<br />";

    if (isset($_POST["ime"])) {
        $mojeIme = $_POST["ime"];
    }


    

?>
<input type="text" class="form-control" id="mojeIme" name="ime" placeholder="Moje ime">