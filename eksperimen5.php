
<?php
    $nama = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = trim($_POST["nama"] ?? "");
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen Tombol Reset</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST">

        <label>Nama Mahasiswa:</label><br>
        <input type="text" name="nama">
        <br><br>

        <button type="submit">Kirim Data</button>

        <button type="reset">Reset</button>

    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            echo "<h3>Hasil Pemrosesan Server</h3>";

            if ($nama === "") {
                echo "Nama belum diisi.";
            } else {
                echo "Nama: " .
                    htmlspecialchars($nama, ENT_QUOTES, "UTF-8");
            }
        }
    ?>

</body>
</html>