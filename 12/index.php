<?php



class Gyvunas{
    public $spalva="Geltona";
    public $svoris="1t";
    public $kojuSkaicius="4";

    public function begti(){
        echo "begu begu";
    }
}


class Kate extends Gyvunas{

}

class Suo{

}

class Dramblys{

}

class Zuvis{

}





$gyvunas = new Gyvunas(); //geltonas 1t 4 kojas
$gyvunas1 = new Gyvunas(); //geltonas 1t 4 kojos


$kate = new Kate();
echo $kate->spalva;
echo "<br>";
echo $kate->svoris;
echo $kate->kojuSkaicius;
echo $kate->begti();


//////////////////////////////////////////////////////
/////keliu lygiu paveldimumas////////////////////////
//////////////////////////////////////////////////////


class Kompiuteris{
    public $spalva;
    public $rusis;
    public $ekranoDydis;
    public $ekranoSpalva;
    public $ekranoRezoliucija;


    


}