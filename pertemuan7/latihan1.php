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
// Variable Scope / lingkup variable
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// Variabel global milik PHP
// merupakan array associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Farhat Abdurachman A";
// $_GET["nrp"] = "203040060";
// var_dump($_GET);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Pembeli Mobil</h1>
<ul>
<?php foreach( $pembeli as $pbl ) : ?>
    <li>
      <a href="latihan2.php?nama=<?= $pbl["nama"]; ?>&alamat= <?= $pbl["alamat"]; ?>&email= <?= $pbl["email"]; ?>&jenis_mobil= <?= $pbl["jenis_mobil"]; ?>&gambar= <?= $pbl["gambar"]; ?>"><?= $pbl["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>