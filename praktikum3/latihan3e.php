<?php 

/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060
Praktikum Jum'at 10:00-11:00
*/

?>

<?php 
$mobil = [
    [
        "nama" => "Supra",
        "merk" => "Toyota",
        "harga" => "Rp. 1.800.000.000",
        "warna" => "Putih",
        "jenis" => "Sportscar",
        "gambar" => "1.jpg",
        "kondisi" => "Second",
        "tahun" => "2020"
    ],
    [
        "nama" => "R35 GTR Nismo",
        "merk" => "Nissan",
        "harga" => "Rp. 2.300.000.000",
        "warna" => "RED AND WHITE",
        "jenis" => "Coupe Sportscar",
        "gambar" => "2a.jpg",
        "kondisi" => "Second",
        "tahun" => "2018"
    ],
    [
        "nama" => "M4",
        "merk" => "BMW",
        "harga" => "Rp. 2.250.000.000",
        "warna" => "Grey",
        "jenis" => "Sportscar",
        "gambar" => "3a.jpg",
        "kondisi" => "Baru",
        "tahun" => "2021"
    ],
    [
        "nama" => "S P100D",
        "merk" => "Tesla",
        "harga" => "Rp. 3.400.000.000",
        "warna" => "Hitam",
        "jenis" => "Electric Car",
        "gambar" => "4a.jpg",
        "kondisi" => "Baru",
        "tahun" => "2021"
    ],
    [
        "nama" => "Land Cruiser VX80",
        "merk" => "Toyota",
        "harga" => "Rp. 400.000.000",
        "warna" => "Abu-Abu",
        "jenis" => "SUV",
        "gambar" => "5a.jpg",
        "kondisi" => "Second",
        "tahun" => "1992"
    ],

];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Latihan3e_203040060</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Tahun Pembuatan</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($mobil as $mbl) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $mbl["gambar"]; ?>"></td>
                    <td><b><?= $mbl["nama"]; ?></b></td>
                    <td><b><?= $mbl["merk"]; ?></b></td>
                    <td><b><?= $mbl["harga"]; ?></b></td>
                    <td><b><?= $mbl["warna"]; ?></b></td>
                    <td><b><?= $mbl["jenis"]; ?></b></td>
                    <td><b><?= $mbl["kondisi"]; ?></b></td>
                    <td><b><?= $mbl["tahun"]; ?></b></td>
                    
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
</body>