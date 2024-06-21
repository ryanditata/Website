<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="bukutamu.css">
    <title>Buku Tamu</title>
</head>
<body>
    <div class="buku">
        <h2>Buku Tamu</h2>
        <form method="post"action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="pesan">Pesan:</label>
            <textarea name="pesan" rows="4" required></textarea>

            <button type="submit">Kirim</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $pesan = $_POST["pesan"];

        echo "<div class=tampil-pesan>";
        echo "<p>Hallo $nama, terima kasih atas kunjungannya!</p>";
        echo "<p>Pesan: $pesan</p>";
        echo "</div>";
        }
        ?>
    </div>
</body>
</html>