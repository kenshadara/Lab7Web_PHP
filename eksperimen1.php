
<?php
    // Nilai mahasiswa
    $nama = "Kensha Dara";
    $tugas = 85;
    $uts = 80;
    $uas = 90;

    // Menghitung nilai rata-rata
    $rataRata = ($tugas + $uts + $uas) / 3;

    // Menampilkan hasil
    echo "<h2>Perhitungan Nilai Rata-rata</h2>";

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai Tugas: " . $tugas . "<br>";
    echo "Nilai UTS: " . $uts . "<br>";
    echo "Nilai UAS: " . $uas . "<br>";

    echo "Nilai Rata-rata: " .
         number_format($rataRata, 2);
?>