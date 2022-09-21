<?php 


$skaicius1 = $_GET["skaicius1"];
$zenklas = $_GET["zenklas"];
$skaicius2 = $_GET["skaicius2"];


if($zenklas == "+")
{
    $rezultatas = "sudetis";
}
if($zenklas == "*")
{
    $rezultatas = "daugyba";
}

if($zenklas == "-")
{
    $rezultatas = "atimtis";
} 


echo "<div>
        <h1>Rezultatas: $rezultatas</h1>
    </div>";
    echo '<body style="background-color:blue">';

?>
