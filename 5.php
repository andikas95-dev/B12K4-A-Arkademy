<?php
function beliMie($tglbeli, $uang)
{
    $bnykmie = floor($uang / 2500);
    if ($tglbeli % 2 == 1) {
        $bonusmie = floor($bnykmie / 3);
    } else {
        $bonusmie = floor($bnykmie / 4);
    }
    if ($tglbeli % 5 == 0) {
        if ($bonusmie % 2 == 0) {
            $bonusmie = $bonusmie * 10;
        } else {
            $bonusmie = $bonusmie * 5;
        }
    }
    $total = $bonusmie + $bnykmie;
    echo "total mie yang anda punya adalah " . $total . " mie";
}

beliMie(25, 100000);
