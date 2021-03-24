<?php 

/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060
Praktikum Jum'at 10:00-11:00
*/

?>

<?php 
//  menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$mobil = query("SELECT * FROM `garasi dut`")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="css/styleeee.css">
    <title>Garasi Dut</title>
</head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
    <table class="centered  lime lighten-4">
                <tr class=" light-green lighten-5">
                    <th>No</th>
                    <th>Merk</th>
                    <th>Nama</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Jenis</th>
                    <th>Kondisi</th>
                    <th>Tahun Pembuatan</th>
                    <th>Foto</th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach ($mobil as $mbl) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $mbl["Merk"]; ?></td>
                        <td><?= $mbl["Nama"]; ?></td>
                        <td><?= $mbl["Warna"]; ?></td>
                        <td><?= $mbl["Harga"]; ?></td>
                        <td><?= $mbl["Jenis"]; ?></td>
                        <td><?= $mbl["Kondisi"]; ?></td>
                        <td><?= $mbl["Tahun Pembuatan"]; ?></td>
                        <td><img src="assets/img/<?= $mbl["Gambar"]; ?>"></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
        </table>
    </div>
</body>
</html>