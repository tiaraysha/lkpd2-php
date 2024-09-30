<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Angka</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <input type="text" name="nama" id="nama" placeholder="Masukkan teks">
        <button type = "submit" id="btn" name="btn">Submit</button>
    </form>

    <?php
        if (isset($_POST['btn'])) {
            $teks = $_POST['nama'];
            echo cekAngka($teks);
        }

        function cekAngka($teks) {
            $angka = preg_replace('/[^0-9]/', '', $teks);

            $angka = implode(", ", str_split($angka, 1));
          
            if ($angka) {
                echo "Text = " . htmlspecialchars($teks) . "<br> Teks mengandung angka: " . $angka;
            } else {
                echo "Text = " . htmlspecialchars($teks) . "<br> Teks tidak mengandung angka.";
            }
        }
    ?>
    </center>
</body>
</html>

