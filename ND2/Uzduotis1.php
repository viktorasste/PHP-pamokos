
<?php 
//a.
// $skaicius1 = 10;
$a = 10;
$b = 15;
$c = 12;
$d = 8;
// $skaicius2 = 15;
// $skaicius3 = 12;
// $skaicius4 = 8;


//b.
echo "<div>$a</div>";
echo "<div>$b</div>";
echo "<div>$c</div>";
echo "<div>$d</div>";

$suma = $a + $b + $c + $d;

echo "<div>Suma: $suma</div>";

$sandauga = $a * $b * $c * $d;

echo "<div>Sandauga: $sandauga</div>";



//c. 
$laikinasisKintamasis = 0;

$laikinasisKintamasis = $a;

$a = $b;

$b = $laikinasisKintamasis;




//d. 

$c = $c + $d;

$d = $c - $d;
$c = $c - $d; 

//e.
echo "<p>$a $b $c $d</p>";

//f.

// $maxSkaicius = PHP_FLOAT_MAX;
$maxSkaicius = PHP_INT_MAX;
// echo "<h1>$maxSkaicius</h1>";
echo "<h1>$maxSkaicius</h1>";






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