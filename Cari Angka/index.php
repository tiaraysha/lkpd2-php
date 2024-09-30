<?php
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

$hasil = array_count_values($data);

if(isset($hasil[$cari])) {
    echo "Jumlah angka $cari = " . $hasil[$cari];
} else {
    echo "Angka $cari tidak ditemukan di dalam array.";
}
?>
