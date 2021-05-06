<?php 

/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 6 - 12 Maret  2021
Mempelajari Array Associative PHP
*/

?>

<?php 

// $pembeli = [
//     ["Farhat Abdurachman Aldjaidi", "Jalan Cikiray Gang masjid Kota Sukabumi", "farhataldjaidi@gmail.com", "Brio"],
//     ["Muhammad Afrizal", "Jalan Batu Asih Kota Bandung", "afrizal21@gmail.com", "Mobilio"],
// ];

/*
Array Associative
definisinya sama seerti array numerik
key-nya adalah strin yang kita buat sendiri
*/

$pembeli = [
    [
        "nama"          => "Farhat Abdurachman Aldjaidi",
        "alamat"        => "Jalan Cikiray Gang Masjid Kota Sukabumi",
        "email"         => "farhataldjaidi@gmail.com",
        "jenis_mobil"   => "Brio",
        "gambar"        => "1.png"
    ],
    [
        "nama"          => "Muhammad Afrizal",
        "alamat"        => "Jalan Batu Asih Kota Bandung",
        "email"         => "afrizal21@gmail.com",
        "jenis_mobil"   => "Mobilio",
        "gambar"        => "2.jpg"
    ],
];

//echo $pembeli[1]["tugas"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembeli Mobil</title>
</head>
<body>
    <h1>Daftar Pembeli Mobil</h1>
    <?php foreach ( $pembeli as $pbl ) : ?>
    <ul>
        <li>
            <img src="img/<?= $pbl["gambar"]; ?>">
        </li>
        <li>Nama : <?= $pbl["nama"]; ?></li>
        <li>Alamat : <?= $pbl["alamat"]; ?></li>
        <li>Email : <?= $pbl["email"]; ?></li>
        <li>Jenis Mobil : <?= $pbl["jenis_mobil"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>