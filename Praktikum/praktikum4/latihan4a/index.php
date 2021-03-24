<?php 

/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060
Praktikum Jum'at 10:00-11:00
*/

?>

<?php 
// membuat koneksi ke database
 $conn = mysqli_connect("localhost", "root", "");
// memilih database
mysqli_select_db($conn, "pw_tubes_203040060");
// melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM `garasi dut`");
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
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row["Merk"]; ?></td>
                        <td><?= $row["Nama"]; ?></td>
                        <td><?= $row["Warna"]; ?></td>
                        <td><?= $row["Harga"]; ?></td>
                        <td><?= $row["Jenis"]; ?></td>
                        <td><?= $row["Kondisi"]; ?></td>
                        <td><?= $row["Tahun Pembuatan"]; ?></td>
                        <td><img src="assets/img/<?= $row["Gambar"]; ?>"></td>
                    </tr>
                    <?php $i++ ?>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>