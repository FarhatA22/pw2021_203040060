<?php

/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060
Praktikum Jum'at 10:00-11:0
*/

?>

<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id_mbl'])) {
    header("Location: ../index.php");
    exit;
}
require '../php/functions.php';

// mengambil id dari url 
$id = $_GET['id_mbl'];


//melakukan query dengan parameter id yang diambil dari url
$mbl = query("SELECT * FROM `garasi dut` WHERE Id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="../css/detail.css">
    <title>Garasi Dut</title>
</head>

<body>
    <div class="container">
        <div class="foto">
            <img src="../assets/img/<?= $mbl["Gambar"]; ?>" alt="">
        </div>
        <div class="detail">
            <p><?= $mbl["Merk"]; ?></p>
            <p><?= $mbl["Nama"]; ?></p>
            <p><?= $mbl["Warna"]; ?></p>
            <p><?= $mbl["Harga"]; ?></p>
            <p><?= $mbl["Jenis"]; ?></p>
            <p><?= $mbl["Kondisi"]; ?></p>
            <p><?= $mbl["Tahun Pembuatan"]; ?></p>
        </div>
        <button class="kembali"><a href="../index.php">Kembali Ke Menu Utama</a></button>
    </div>
</body>

</html>