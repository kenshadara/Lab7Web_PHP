
<?php
    // Function untuk menghitung diskon
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    // Function tambahan untuk menghitung luas persegi panjang
    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // Menghitung harga setelah diskon
    $hargaAkhir = hitungDiskon(150000, 10);

    // Menghitung luas persegi panjang
    $luas = hitungLuas(8, 4);

    echo "<h3>Perhitungan Diskon</h3>";
    echo "Harga awal: Rp150.000<br>";
    echo "Diskon: 10%<br>";
    echo "Harga setelah diskon: Rp" .
         number_format($hargaAkhir, 0, ",", ".");

    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Panjang: 8 cm<br>";
    echo "Lebar: 4 cm<br>";
    echo "Luas: " . $luas . " cm2";
?>