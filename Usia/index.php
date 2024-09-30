<?php
$data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

$jumlahAnak = 0;
$jumlahDewasa = 0;

echo "List Usia: " . implode(", ", $data) . "<br>";
foreach($data as $usia) {
    if($usia < 17) {
        $jumlahAnak++;
    } else {
        $jumlahDewasa++;
    }
}

echo "Jumlah Kategori Dewasa :  <b> $jumlahDewasa </b> <br> Jumlah Kategori Anak-Anak :  <b> $jumlahAnak </b>"
?>