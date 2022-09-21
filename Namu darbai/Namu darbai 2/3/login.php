<?php 


$vardas = $_GET["vardas"];
$slaptazodis = $_GET["slaptazodis"];


if ($vardas === 'admin' && $slaptazodis === '123456') { 
    echo 'Prisijungėte sėkmingai';
    } 
    else {
    echo 'Įvesti duomenys neteisingi';
    }


?>


