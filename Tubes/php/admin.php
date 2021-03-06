<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$mobil = query("SELECT * FROM `garasi dut`");

//cari
if (isset($_GET["cari"])) {
    $mobil = cari($_GET["keyword"]);
}
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
    <link rel="stylesheet" href="../css/style.css">
    <title>Garasi Dut</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Garasi dut</h1>
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light blue btn-small">Tambah Data</a>
            <form action="" method="GET">
                <input class="white-text" type="text" name="keyword" autofocus placeholder="masukkan pencarian....." autocomplete="off">
                <button class="waves-effect waves-light blue btn-small" type="submit" name="cari">Search</button>
            </form>
        </div>
        <table class="centered  lime lighten-4">
            <tr class=" light-green lighten-5">
                <th>No</th>
                <th>Opsi</th>
                <th>Merk</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Detail</th>
            </tr>
            <?php if (empty($mobil)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ($mobil as $mbl) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                            <a href="ubah.php?Id=<?= $mbl['Id'] ?>" class="waves-effect waves-light blue btn-small">Ubah</a>
                            <a href="hapus.php?Id=<?= $mbl['Id']; ?>" onclick="return confirm('Hapus Data??')" class="waves-effect waves-light red darken-3 btn-small">Hapus</a>
                        </td>
                        <td><?= $mbl["Merk"]; ?></td>
                        <td><?= $mbl["Nama"]; ?></td>
                        <td><?= $mbl["Harga"]; ?></td>
                        <td><img src="../assets/img/<?= $mbl["Gambar"]; ?>"></td>
                        <td>
                            <p class="Merk">
                                <a href="../php/detail.php?id_mbl=<?= $i ?>">
                                    <?= $mbl["Merk"]; ?>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="logout">
                <a href="logout.php" class="waves-effect waves-light red btn-small">Logout</a>
            </div>
        </table>
    </div>
</body>

</html>