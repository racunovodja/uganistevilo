<?php

$zelenjava = array("čebula", "kumara", "paprika", "paradižnik");
$meso = array("čevapčiči", "ražnjiči");
     
echo $zelenjava[2];
echo "<br />";
echo $meso[1];


echo "<br />";
echo "<br />";
$kupi = array(
    array(
        "sestavina" => "kruh",
        "koliko" => 2
    ),
    array(
        "sestavina" => "korenje",
        "koliko" => 5
        )
    );
echo "Kupi ".$kupi[0]["koliko"]."x ".$kupi[0]["sestavina"];
echo "<br />";
echo "Kupi ".$kupi[1]["koliko"]."x ".$kupi[1]["sestavina"];
echo "<br />";


//for ($i = 1; $i < 101; $i = $i + 1) {
 //   echo $i."<br />";
//}

?>

<ul>
    <?php
        $nakup = array("kruh", "mleko", "jajca", "nutella", "cockta");
        
foreach ($nakup as $sestavina) {
    echo "<li>$sestavina</li>";
}
    ?>

</ul>