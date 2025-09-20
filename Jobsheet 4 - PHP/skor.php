<?php
$poinPemain = 600;

echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan. Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”";

echo "<br><h3>Jawaban:</h3>";
//menampilkan total skor pemain
echo "Total skor pemain adalah: $poinPemain<br>";

//cek apakah pemain mendapatkan hadiah tambahan menggunakan ternary operator
$hadiahTambahan = ($poinPemain > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>