<?php 
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060
Praktikum Jum'at 10:00-11:00
*/
?>


<?php
    require 'functions.php';
    $Id = $_GET['Id'];
    $mbl = query("SELECT * FROM `garasi dut` WHERE Id = $Id")[0];

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
                    </script>";
        } else {
            echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
            </script>";
        }
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
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/styleeee.css">
    <title>Garasi Dut</title>
</head>
<body>
<script type="text/javascript" src="..js/materialize.min.js"></script>
    <div class="container">
<h3>Ubah Data Mobil</h3>
<form action="" method="post">
    <input type="hidden" name="Id" value="<?= $mbl['Id']; ?>">
   <div class="card-panel">
   <div class="input-field">
   <input type="text" name="Merk" id="Merk" required value="<?= $mbl['Merk'];?>">
   <label for="Merk">Merk</label>
   </div>
   <div class="input-field">
   <input type="text" name="Nama" id="Nama" required value="<?= $mbl['Nama'];?>">
   <label for="Nama">Nama</label>
   </div>
   <div class="input-field">
   <input type="text" name="Warna" id="Warna" required value="<?= $mbl['Warna'];?>">
   <label for="Warna">Warna</label>
   </div>
   <div class="input-field">
   <input type="text" name="Harga" id="Harga" required value="<?= $mbl['Harga'];?>">
   <label for="Harga">Harga</label>
   </div>
   <div class="input-field">
   <input type="text" name="Jenis" id="Jenis" required value="<?= $mbl['Jenis'];?>">
   <label for="Jenis">Jenis</label>
   </div>
   <div class="input-field">
   <input type="text" name="Kondisi" id="Kondisi" required value="<?= $mbl['Kondisi'];?>">
   <label for="Kondisi">Kondisi</label>
   </div>
   <div class="input-field">
   <input type="text" name="Tahun Pembuatan" id="Tahun Pembuatan" required value="<?= $mbl['Tahun Pembuatan'];?>">
   <label for="Tahun Pembuatan">Tahun Pembuatan</label>
   </div>
   <div class="input-field">
   <input type="text" name="Gambar" id="Gambar" required value="<?= $mbl['Gambar'];?>">
   <label for="Gambar">Foto</label>
   </div>
   <button type="submit" name="tambah" class="waves-effect waves-light red darken-3 btn small">Ubah Data</button>
   <a href="../indeks.php" class="waves-effect waves-light blue btn small">Kembali</a>
   </div>
   </form>
    </div>
</body>
</html>