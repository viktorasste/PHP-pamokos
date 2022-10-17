<?php

        $graza = 223.38;
        echo "<h1> $graza </h1>";
        //intval - is realiojo skaiciaus pasiima sveikaji dali
		$centai = round($graza - intval($graza), 2);
        echo "<h2> ". intval($graza) ."</h2>";
        $simtas = intval($graza/100); // 223/100 = 2(.23)
        $graza = $graza % 100; // 223 % 100 = 23
        $penkiasdesimt = intval($graza/50); // 23/50 = 0(.46)
        $graza = $graza % 50; // 23 % 50 = 23
        $dvidesimt = intval($graza/20); // 23/20 = 1(.15)
        $graza = $graza % 20; // 23 % 20 = 3
        $desimt = intval($graza/10); // 3/10 = 0(.3)
        $graza = $graza % 10; // 3 % 10 = 3
        $penki = intval($graza/5); // 3/5 = 0(.6)
        $graza = $graza % 5; // 3 % 5 = 3
        $du = intval($graza/2); // 3/2 = 1(.5)
        $graza = $graza % 2; // 3 % 2 = 1
        $vienas = $graza;
        echo "Simtu ".$simtas;
        echo "<br>";
        echo "penkiasdesimt ".$penkiasdesimt;
        echo "<br>";
        echo "dvidesimt ".$dvidesimt;
        echo "<br>";
        echo "desimt ".$desimt;
        echo "<br>";
        echo "penki ".$penki;
        echo "<br>";
        echo "du ".$du;
        echo "<br>";
        echo "vienas ".$vienas;

        echo "<h2> ". $centai ."</h2>";
        $penkiasdesimt = intval($centai, 2)/0.50;
        $centai -= (0.50 * $penkiasdesimt);

        $dvidesimt = intval(round($centai, 2)/0.20);
        $centai -= (0.20 * $dvidesimt);

        $desimt = intval(round($centai, 2)/0.10); 
        $centai -= (0.10 * $desimt);

        $penki = intval(round($centai, 2)/0.05);
        $centai -= (0.05 * $penki); 

        $du = intval(round($centai, 2)/0.02); 
        $centai -= (0.02 * $du);

        $vienas = intval(round($centai, 2)/0.01);
        echo "50ct ".$penkiasdesimt;
        echo "<br>";
        echo "20ct ".$dvidesimt;
        echo "<br>";
        echo "10ct ".$desimt;
        echo "<br>";
        echo "5ct ".$penki;
        echo "<br>";
        echo "2ct ".$du;
        echo "<br>";
        echo "1ct ".$vienas;

?>