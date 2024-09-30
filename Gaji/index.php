<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jam Kerja</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <label for="mulai">Jam Mulai</label>
        <input type="number" name="mulai" id="mulai" placeholder="Gunakan format 24 jam" required>
        <br><br>
        <label for="pulang">Jam Pulang</label>
        <input type="number" name="pulang" id="pulang" placeholder="Gunakan format 24 jam" required>
        <br><br>
        <button  type="submit" name="btn" id="btn">Submit</button>
    </form>
</center>
</body>
</html>

<?php
echo "<center>";

if(isset($_POST["btn"])){
  
    $mulai = $_POST["mulai"];
    $pulang = $_POST["pulang"];
   
    $lamaKerja = 8;
    $totalKerja = $pulang - $mulai;
    $jamLebih = $totalKerja - $lamaKerja;
    $kompensasi = 0;
     
    if($jamLebih >=1) {
        $kompensasi += 50000;
    }
    
    if($jamLebih > 1) {
            $kompensasi += ($jamLebih - 1) * 25000;
    }
        echo "Lama Kerja : " . $totalKerja . " Jam<br> Jam Lebih : " . $jamLebih . " Jam <br> Jumlah Kompensasi : Rp. " . number_format($kompensasi, 0 , "," , "."); 
    
}
echo "</center>";

?>