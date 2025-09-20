<?php
// Tipe Data Integer (langkah 2)
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "<h3>Tipe Data Integer</h3>";

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

echo "<br><br>";

// Tipe Data Float (langkah 5)
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "<h3>Tipe Data Float</h3>";

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);

echo "<br><br>";

// Tipe Data Boolean (langkah 8)
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "<h3>Tipe Data Boolean</h3>";

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<br><br>";

// Tipe Data String (langkah 11)
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "<h3>Tipe Data String</h3>";

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

echo "<br><br>";

// Tipe Data Array (langkah 14)
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendir Fabri"];

echo "<h3>Tipe Data Array</h3>";

echo $listMahasiswa[0];
?>