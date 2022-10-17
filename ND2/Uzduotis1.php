
<?php 
//a.
$skaicius1 = 15;
$skaicius2 = 7;
$skaicius3 = 28;
$skaicius4 = 13;


//b.
echo "<div>$skaicius1</div>";
echo "<div>$skaicius2</div>";
echo "<div>$skaicius3</div>";
echo "<div>$skaicius4</div>";

$suma = $skaicius1 + $skaicius2 + $skaicius3 + $skaicius4;

echo "<div>Suma: $suma</div>";

$sandauga = $skaicius1 * $skaicius2 * $skaicius3 * $skaicius4;

echo "<div>Sandauga: $sandauga</div>";



//c. 
$laikinasisKintamasis = 0;

$laikinasisKintamasis = $skaicius1;

$skaicius1 = $skaicius2;

$skaicius2 = $laikinasisKintamasis;




//d. 

$skaicius3 = $skaicius3 + $skaicius4;

$skaicius4 = $skaicius3 - $skaicius4;
$skaicius3 = $skaicius3 - $skaicius4; 

//e.
echo "<p>$skaicius1 $skaicius2 $skaicius3 $skaicius4</p>";

//f.

// $maxSkaicius = PHP_FLOAT_MAX;
$maxSkaicius1 = PHP_INT_MAX;
// echo "<h1>$maxSkaicius</h1>";
echo "<h1>$maxSkaicius1</h1>";






//Papildoma

//g.
$skaicius5 = 10; // 1100
$skaicius6 = 3; // 0100

//h.
$skaicius5 = $skaicius5 xor $skaicius6; // 1100 xor 0100 = 1000 -> 8
$skaicius6 = $skaicius5 xor $skaicius6; // 1000 xor 0100 = 1100 -> 12
$skaicius5 = $skaicius5 xor $skaicius6; // 1000 xor 1100 = 0100 -> 4

//i.
echo "<div class='rezultatas'>".$skaicius5.$skaicius6."</div>";

?>