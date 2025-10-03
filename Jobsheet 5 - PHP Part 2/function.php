<?php
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam. ", ";
    echo "Perkenalkan, nama saya " .$nama. "</br>";
    echo "Senang berkenalan dengan Anda </br>";
}
perkenalan("Wida", "Halo");
echo "<hr>";

$saya = "Dea";
$ucapanSalam="Selamat Pagi";

perkenalan($saya);
?>