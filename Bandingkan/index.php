<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membandingkan Jumlah Karakter</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <label for="nama1">Nama Pertama:</label>
        <input type="text" name="nama1" id="nama1" placeholder="Masukkan nama" required>
        <br><br>
        <label for="nama1">Nama Kedua:</label>
        <input type="text" name="nama2" id="nama2" placeholder="Masukkan nama" required>
        <br><br>
        <button type="submit" id="btn" name= "btn">Submit</button>
        <br><br>
    </form>


<?php
    if (isset($_POST['btn'])) {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $hitung1 = hitung($nama1);
        $hitung2 = hitung($nama2);

        if($hitung1 > $hitung2) {
            echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih " . $hitung1-$hitung2 . " karakter";
        } elseif ($hitung2 > $hitung1) {
            echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : selisih " . $hitung2-$hitung1 . " karakter";
        } elseif ($hitung1 == $hitung2) {
            echo "$nama1 dan $nama2 memiliki jumlah karakter yang sama";
        }
    }

    function hitung($text) {
        $text = preg_replace('/[^a-zA-Z]/', '', $text);
        return strlen($text);
    }

?>
</center>
</body>
</html>