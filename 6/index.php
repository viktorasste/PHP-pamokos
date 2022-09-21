<?php session_start(); ?>

<?php ?>

<?php


$_SESSION["vardas"] = "Destytojas";
$_SESSION["skaicius"] = 1;
$_SESSION["skaiciuspokablelio"] = 2.2;


$_SESSION["masyvas"] = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

class MazasObjektas{
    public $x = 5;
    public $y = 8;

    public function suma(){
        return $this->x + $this->y;;
    }

}

echo $_SESSION["vardas"];

$vardas = "Destytojas";
echo $vardas;



?>