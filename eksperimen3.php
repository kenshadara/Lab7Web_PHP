
<?php
    // Function untuk format Rupiah
    function formatRupiah($angka) {
        return "Rp" . number_format($angka, 0, ",", ".");
    }

    $harga1 = 150000;
    $harga2 = 25000;
    $harga3 = 1250000;

    echo "<h2>Format Harga Rupiah</h2>";

    echo "Harga 1: " . formatRupiah($harga1) . "<br>";
    echo "Harga 2: " . formatRupiah($harga2) . "<br>";
    echo "Harga 3: " . formatRupiah($harga3) . "<br>";
?>