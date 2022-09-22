<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

// class Skaiciuotuvas {
//     public $a;
//     public $b;

//     public function __construct($a, $b){
//         $this->a = $a;
//         $this->b = $b;
//     }
//     public function sudeti(){
//         return $this->a+$this->b;
//     }
// }
//     $sumaObjekta  = new Skaiciuotuvas(5,10);
//     echo $sumaObjekta->sudeti();
// ?>

<?php

    $masyvas = array(1,2,3,4,5,6,7,8,9,10);
    $masyvas1 = [1,2,3,4,5,6,7,8,9,10];



    $asocmasyvas = array(
        "pirmas" => 1,
        "antras" => 1,
        "trecias" => 1,
        "ketvirtas" => 1,
        "penktas" => 1,
        "sestas" => 1,
        "septintas" => 1,
        "astuntas" => 1,
        "devintas" => 1,
        "desimtas" => 1,
    );


    var_dump($masyvas);
    var_dump($masyvas1);
    var_dump($asocmasyvas);


    echo $asocmasyvas[3];

    foreach($asocmasyvas as $blabla){
        echo $blabla;
        echo "<br>";
    };




    


?>
    
</body>
</html>