<?php
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 10 - 23 April 2021
Tugas Besar
*/
?>

<?php
if (!isset($_GET['id'])) {
  header("latihan3.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body bgcolor="lavender">
  <div class="container">
    <div class="gambar">
      <img width="200px" src="../assets/img/<?= $mahasiswa["img"]; ?>" ; alt="">
    </div>
    <div class="keterangan">
      <p><?= $mahasiswa["nrp"]; ?></p>
      <p><?= $mahasiswa["nama"]; ?></p>
      <p><?= $mahasiswa["email"]; ?></p>
      <p><?= $mahasiswa["jurusan"]; ?></p>
    </div>

    <button class="tombol-kembali"><a href="latihan3.php">Kembali</a></button>
  </div>

</body>

</html>