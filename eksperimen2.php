
<?php
    $mahasiswa = [
        "Alya",
        "Bima",
        "Citra",
        "Doni",
        "Eka",
        "Fajar",
        "Gina"
    ];

    $hasil = "";
    $kataKunci = "";

    if (isset($_GET["nama"])) {
        $kataKunci = trim($_GET["nama"]);
        $ditemukan = false;

        foreach ($mahasiswa as $nama) {
            if (stripos($nama, $kataKunci) !== false) {
                $hasil .= $nama . "<br>";
                $ditemukan = true;
            }
        }

        if ($kataKunci === "") {
            $hasil = "Masukkan nama yang ingin dicari.";
        } elseif (!$ditemukan) {
            $hasil = "Nama mahasiswa tidak ditemukan.";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET">
        <label>Masukkan nama:</label>
        <input type="text" name="nama">
        <button type="submit">Cari</button>
    </form>

    <?php
        if (isset($_GET["nama"])) {
            echo "<h3>Hasil Pencarian:</h3>";
            echo $hasil;
        }
    ?>

</body>
</html>