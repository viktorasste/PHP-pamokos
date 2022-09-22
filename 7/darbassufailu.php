<?php

$failas = file_get_contents("tekstas.txt");
echo $failas;


$tekstaskurinoriuirasyti = "Labas rytas";
file_put_contents("klientai.json", $tekstaskurinoriuirasyti);


// $masyvas = array(
//     "vardas" => "Jonas",
//     "pavarde" => "Jonaitis",
//     "amzius" => "25",
//     "miestas" => "Jonava"
// );

//nuskaitymas veikia, tuoj paziuresiu irasyma
echo file_get_contents("klientai.json", $masyvas);
    







?>
