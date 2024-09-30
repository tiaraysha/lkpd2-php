<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$bilSama = array_intersect($bil1, $bil2);
echo "<b>Bilangan yang ada di kedua variabel </b> <br>" . implode(", ", $bilSama);

$bilBeda = array_diff($bil1, $bil2);
echo "<br><br><b>Bilangan yang tidak ada di kedua variabel </b> <br>" . implode(", ", $bilBeda);
?>