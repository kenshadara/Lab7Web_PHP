
<?php
    $hasil = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nim = trim($_POST["nim"] ?? "");

        // Validasi NIM
        if ($nim === "") {
            $error = "NIM wajib diisi.";
        } elseif (!ctype_digit($nim)) {
            $error = "NIM hanya boleh berisi angka.";
        } elseif (strlen($nim) !== 10) {
            $error = "NIM harus terdiri dari 10 digit.";
        } else {
            $hasil = "NIM valid: " . htmlspecialchars($nim);
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
</head>
<body>

    <h2>Validasi NIM Mahasiswa</h2>

    <form method="POST">
        <label>Masukkan NIM:</label><br>
        <input type="text" name="nim">
        <br><br>

        <button type="submit">Periksa NIM</button>
    </form>

    <?php
        if ($error !== "") {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }

        if ($hasil !== "") {
            echo "<h3>" . $hasil . "</h3>";
        }
    ?>

</body>
</html>