<?php

include "utilities/FileManger.php";

class Klientai {

    use FileManager;

    // public $file;
    // public $data;

    // public function readFile() {
    //     $this->data = json_decode(file_get_contents($this->file), true);
    // }

    // public function writeFile($data) {
    //     file_put_contents($this->file, json_encode($data));
    // }




    public $klientai = [];

    public function __construct() {
        //nurodau koki faila nuskaitau
        $this->file = "klientai.json";
        //nauskaitau faila - $data;
        $this->readFile();
        $this->klientai = $this->data;
    }

    // public function showClients() {
    //     foreach($this->klientai as $key => $klientas) {
    //         echo "<tr>";
    //         echo "<td>" . $key . "</td>";
    //         echo "<td>" . $klientas["vardas"] . "</td>";
    //         echo "<td>" . $klientas["pavarde"] . "</td>";
    //         echo "<td>" . $klientas["amzius"] . "</td>";
    //         echo "<td>" . $klientas["miestas"] . "</td>";
    //         echo "</tr>";
    //     }
    // }

    //nuskaitymo ir irasymo i faila

}