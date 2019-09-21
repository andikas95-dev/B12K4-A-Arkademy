<?php
function HandShake($banyak)
{
    $count = 0;
    for ($i = 1; $i <= $banyak; $i++) {
        $jmljabat = $banyak - $i;
        $count = $count + $jmljabat;
    }
    echo "Jumlah Jabat Tangan jika " . $banyak . " orang= " . $count;
}

HandShake(100);//ubah angka 100 menjadi angka sesuai yang ingin anda cari
