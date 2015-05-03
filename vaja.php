<?php

$ime ="Robert" ;

echo "Živjo <br> $ime, kako si kaj?<br><br>";

$a = 80;
$b = 27;
$ime = "Robert";

echo "<br>";
echo "<br>";


$polje = array("banana", "jabolko", "ananas");

echo $polje[1];

echo "<br>";
echo "<br>";


$oseba = array(
    "ime" => "Jože", 
    "priimek" => "Novak", 
    "starost" => 23);

echo $oseba["ime"]." ".$oseba['priimek'];

echo "<br>";
echo "<br>";


echo $a + $b;
echo "<br>";
echo $a-$b;
echo "<br>";
echo $a * $b; 
echo "<br>";
echo "<br>";

if ($a > $b) {
    echo "$a je večji od $b";
} else {
    echo "$b je večji od $a";
}
echo "<br>";
echo "<br>";

if ($a > $b) {
    echo "a je večji od b";
} else {
    echo "b je večji od a";
}

echo "<br>";
echo "<br>";
 
$i = 1;
$n = 30;

while($i <= $n) {
    echo $i."<br>";
    $i = $i + 1;
}




?>