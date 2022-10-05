<?php

//Objektinio programavimo principas//

//Kodas paremtas objekto kurimu//


//Objektas - tai yra kintamais, kuris turi savitas savybes ir funkcijas//


//Classes - sablonas, pagal kuri kuriamas objektas//


class Kompiuteris {
    
    //Savybes(properties)//
    public $modelis="Asus";
    public $procesorius="Intel";
    public $ramAtmintis="8Gb";
    public $spalva="Juoda";
    // private $procesoriausVidinisSoftware = "Slapta programine iranga";


    //Pasiekiamumo raktazodziai:
    //1.public- sisiems, sita savybe  pasiekiama uz klases ribu
    //2.protected - savybe gali buti naudojama klases viduje ir vaikinese klasese(objektai gali tureti hierarchija)
    //3.private- savybe gali buti naudojama tik klases viduje
    
    //Metodas -tai funkcija klases viduje//
    protected function pilnasModelis(){
        echo $this->$modelis . "" .$this->$procesorius . "" . $this->$ramAtmintis . "" . $this->$spalva;
    }
}


//Sukuriame objekta!
$kompiuteris = new Kompiuteris();

        echo $kompiuteris->modelis;
        echo "<br>";
        echo $kompiuteris->procesorius;
        echo "<br>";
        echo $kompiuteris->ramAtmintis;
        echo "<br>";
        echo $kompiuteris->spalva;
        echo "<br>";
        // echo $kompiuteris->procesoriausVidinisSoftware;

        //metodas

        $kompiuteris->pilnasModelis();



        ///////////////////////////////////////////////////////

        class FailoSkaitytuvas{
            public $failoVardas;
            public $failoTurinys;
            public $arReikalingaKonversija; //true/false

            //true - gautas failo turinys JSON paverciamas i php masyva
            //false - gautas failo turinys paliekamas kaip yra


            public function readJson(){
                $json = file_get_contents($this->failoVardas);
                $result = json_decode($json, true);
            }

            public function writeJson(array){
                $json = json_encode(array);
                file_put_contents($this->failoVardas,$json);
            }
        }

