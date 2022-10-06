<?php





//accessFlagPagrindinis
//accessFlagApieMus
//accessFlagKontaktai
//accessFlagGalerija
//accessFlagVartotojuSarasas
















class Vartotojas {
    public $name;
    public $surname;
    public $age;
    public $id;
    public $email;
}


class Administratorius extends Vartotojas{
    // public $name;
    // public $surname;
    // public $age;
    // public $id;
    // public $email;
    public $role = "admin";
}
class moderatorius extends Vartotojas{
    // public $name;
    // public $surname;
    // public $age;
    // public $id;
    // public $email;
    public $role = "moderator";
}


class Klientas extends Vartotojas{
    // public $name;
    // public $surname;
    // public $age;
    // public $id;
    // public $email;
    public $role = "client";
}


class Svecias extends Vartotojas{
    // public $name;
    // public $surname;
    // public $age;
    // public $id;
    // public $email;
    public $role = "guess";
}
