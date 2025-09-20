<?php
$hargaProduk = 120000;
$diskon = 0;

echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.";

echo "<br><h3>Jawaban:</h3>";
//cek apa harga produk lebih dari Rp 100.000
if ($hargaProduk > 100000) {
    $diskon = $hargaProduk * 0.20; //hitung diskon 20%
    echo "Selamat! Anda mendapatkan diskon 20%<br>";
} else {
    echo "Tidak ada diskon yang berlaku<br>";
}

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "Harga awal: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Besar diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
?>