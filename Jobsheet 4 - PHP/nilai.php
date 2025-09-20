<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahSiswa = 10;
$totalNilai = 0;

echo "Ada soal cerita: Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)";

//mencari 2 niai terendah
$nilaiTerendah1 = 100;
$nilaiTerendah2 = 100;

for ($i = 0; $i < $jumlahSiswa; $i++) {
    if ($nilaiSiswa[$i] < $nilaiTerendah1) {
        $nilaiTerendah2 = $nilaiTerendah1;
        $nilaiTerendah1 = $nilaiSiswa[$i];
    } else if ($nilaiSiswa[$i] < $nilaiTerendah2) {
        $nilaiTerendah2 = $nilaiSiswa[$i];
    }
}

//mencari 2 nilai tertinggi
$nilaiTertinggi1 = 0;
$nilaiTertinggi2 = 0;

for ($i = 0; $i < $jumlahSiswa; $i++) {
    if ($nilaiSiswa[$i] > $nilaiTertinggi1) {
        $nilaiTertinggi2 = $nilaiTertinggi1;
        $nilaiTertinggi1 = $nilaiSiswa[$i];
    } else if ($nilaiSiswa[$i] > $nilaiTertinggi2) {
        $nilaiTertinggi2 = $nilaiSiswa[$i];
    }
}

echo "<br><h3>Jawaban:</h3>";
//menghitung total nilai yang tersisa
echo "Nilai yang dihitung: ";
foreach ($nilaiSiswa as $nilai) {
    //abaikan nilai jika itu adalah dua terendah atau dua tertinggi
    if ($nilai == $nilaiTerendah1 || $nilai == $nilaiTerendah2 || $nilai == $nilaiTertinggi1 || $nilai == $nilaiTertinggi2) {
        continue;
    }
    $totalNilai += $nilai;
    echo $nilai . " ";
}

//menampilkan hasil
echo "<br>2 Nilai Terendah: $nilaiTerendah1 dan $nilaiTerendah2";
echo "<br>2 Nilai Tertinggi: $nilaiTertinggi1 dan $nilaiTertinggi2";
echo "<br>Total nilai setelah diabaikan: $totalNilai";
?>