<?php
//kolom itu kebawah, sedangkan baris itu ke samping
function DeretFibonacci ($kolom,$baris){
    $angka_awal = 0;
    $angka_baru = 1;
    $output = 0;
    for ($i=0; $i < $baris ; $i++) { 
        for ($j=0; $j < $kolom; $j++) { 
            if ($i == 0 && $j == 0) {
                echo $angka_awal.", ";
            } elseif ($i == 0 && $j == 1) {
                echo $angka_baru.", ";
            } else {
                $output = $angka_awal + $angka_baru;
                echo $output.", ";
                $angka_awal = $angka_baru;
                $angka_baru = $output;
            }
            
        }
        echo "<br/>";
    }
}




DeretFibonacci(10,5);//ubah sesuai keinginan anda, angka 10 adalah kolom sedangkan 5 adalah baris
?>
