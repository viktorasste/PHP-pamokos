<?php

    // 100, 50, 20, 5, 2, 1, 0.50, 0.20, 0.10, 0.05, 0.02, 0.01

    $graza = 326;
    echo "<h1> $graza </h1>";

    $simtas = intval($graza/100); // 326/100 = 3(.26)

    $graza = $graza % 100; // 326 % 100 = 26

    $penkiasdesimt = intval($graza/50); // 26/50 = 0

    $graza = $graza % 50; 



?>

<?php
$var = '122.34343The';
$float_value_of_var = intval($var);
echo $float_value_of_var; // 122.34343
echo "<br>";
echo $var;
?>
