<?php


class Gyvunas{
    public $svoris = 1;

    public function valgyti(){
        echo "Valgau";
    }
}





// ///sasajoje mes aprasome tik metodus, metodai turi buti tusti



// interface Sasaja {
//         public function metodas1();
//         public function metodas2();
//         public function metodas3();

// }


// class Klase1 implements Sasaja{
//         public function metodas1(){
//             echo "Klase1 metodas1";
//         }

//         public function metodas2(){
//             echo "Klase1 metodas2";
//         }

//         public function metodas3(){
//             echo "Klase1 metodas3";
//         } 
        // }
        
// class Kalse2 implements {


// }


interface Skristi{
    public function skristi();
}

interface Plaukti{
    public function plaukti();
}







class Paukstis {
    public function info(){
        echo "Cyp cyp paukstis";
    }
}

class Pingvinas extends Paukstis implements Plaukti{


    public function plaukti(){
        echo "Pingvinas plaukia";
    }
}

class Antis extends Paukstis{}

class Balandis extends Paukstis{}

$pingvinas = new Pingvinas();
$pingvinas->info();
$pingvinas->plaukti();
echo "<br>";
$antis = new Antis();
$antis->info();
echo "<br>";
$balandis = new Balandis();
$balandis->info();
echo "<br>";