<?php
function hitungPecahan($jumlahUang) {
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100];
    
    foreach ($pecahan as $nilai) {
        $jumlahLembar = intdiv($jumlahUang, $nilai);
        if ($jumlahLembar > 0) {
            echo "Pecahan Rp. " . number_format($nilai, 0, ',', '.') . ": " . $jumlahLembar . " lembar<br>";
            $jumlahUang %= $nilai; 
        }
    }
}

$jumlahUang = 140500; 
echo "Jumlah uang: $jumlahUang <br>";
hitungPecahan($jumlahUang);
?>
