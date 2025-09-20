<?php
//data siswa: nama dan nilai
$dataSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

//hitung rata-rata kelas
$totalNilai = 0;
$jumlahSiswa = 0;

foreach ($dataSiswa as $siswa) {
    $totalNilai += $siswa[1];
    $jumlahSiswa++;
}

$rataRata = $totalNilai / $jumlahSiswa;

//cetak daftar nilai siswa yang di atas rata-rata
echo "Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90";

echo "<h3>Jawaban:</h3>";
echo "Rata-rata kelas: " . number_format($rataRata, 2) . "<br><br>";

echo "Siswa dengan nilai di atas rata-rata:<br>";
foreach ($dataSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "- {$siswa[0]}: {$siswa[1]}<br>";
    }
}
?>