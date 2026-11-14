
<?php
    $mahasiswa = [
        "Mingyu",
        "Sungchan",
        "Chanyeol",
        "Haruto",
        "Jaehyun",
        "Sunwoo",
        "San"
    ];

    echo "<h3>Daftar Mahasiswa</h3>";
    echo "<ol>";

    foreach ($mahasiswa as $nama) {
        echo "<li>" . htmlspecialchars($nama) . "</li>";
    }

    echo "</ol>";
?>