<?php
$totalKursi = 45;
$terisi = 28;
$kosong = $totalKursi - $terisi;
$persenKosong = ($kosong / $totalKursi) * 100;

echo "Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?<br><br>";
echo "<h3>Perhitungan:</h3>";
echo "Total seluruh kursi : " . $totalKursi . "<br>";
echo "Kursi yang terisi : " . $terisi . "<br>";
echo "Kursi yang kosong : $totalKursi - $terisi = $kosong" . "<br><br>";
echo "Hasil : ($kosong / $totalKursi) * 100 = " . round($persenKosong, 2) . "%";
?>