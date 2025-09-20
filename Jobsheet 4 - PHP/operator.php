<?php
// Langkah 2 - Operator Aritmatika
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Langkah 5 - Operator Pembanding
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Langkah 8 - Operator Logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// langkah 11 - Operator Penugasan
$hasilTambahPenugasan = $a += $b;
$hasilKurangPenugasan = $a -= $b;
$hasilKaliPenugasan = $a *= $b;
$hasilBagiPenugasan = $a /= $b;
$hasilSisaBagiPenugasan = $a %= $b;

// langkah 14 - Operator Identitas
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// Menampilkan hasil
echo "<h3>Operator Aritmatika</h3>";
echo "a = $a <br>";
echo "b = $b <br><br>";
echo "a + b = " . $hasilTambah . "<br>";
echo "a - b = " . $hasilKurang . "<br>";
echo "a * b = " . $hasilKali . "<br>";
echo "a / b = " . $hasilBagi . "<br>";
echo "a % b = " . $sisaBagi . "<br>";
echo "a ** b = " . $pangkat . "<br>";

echo "<br><br>";

echo "<h3>Operator Pembanding</h3>";
echo "a = $a <br>";
echo "b = $b <br><br>";
echo "a == b : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "a != b : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "a < b : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "a > b : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "a <= b : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "a >= b : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

echo "<br><br>";

echo "<h3>Operator Logika</h3>";
echo "a = $a (" . ($a ? 'true' : 'false') . ")<br>";
echo "b = $b (" . ($b ? 'true' : 'false') . ")<br><br>";
echo "a && b : " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "a || b : " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "!a : " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "!b : " . ($hasilNotB ? 'true' : 'false') . "<br>";

echo "<br><br>";

echo "<h3>Operator Penugasan</h3>";
echo "a = $a <br>";
echo "b = $b <br><br>";
echo "a += b = " . $hasilTambahPenugasan . "<br>";
echo "a -= b = " . $hasilKurangPenugasan . "<br>";
echo "a *= b = " . $hasilKaliPenugasan . "<br>";
echo "a /= b = " . $hasilBagiPenugasan . "<br>";
echo "a %= b = " . $hasilSisaBagiPenugasan . "<br>";

echo "<br><br>";

echo "<h3>Operator Identitas</h3>";
echo "a = $a (" . gettype($a) . ")<br>";
echo "b = $b (" . gettype($b) . ")<br><br>";
echo "a === b : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "a !== b : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>