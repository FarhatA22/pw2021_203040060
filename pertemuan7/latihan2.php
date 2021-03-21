<?php
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 7 - 19 Maret  2021
Mempelajari Get & Post
*/
?>
<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jenis_mobil"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembeli Mobil</title>
</head>
<body>
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["alamat"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jenis_mobil"]; ?></li>
</ul>
<a href="latihan1.php">Kembali ke daftar pembeli</a>
</body>
</html>