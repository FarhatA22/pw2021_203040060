<?php 
$mahasiswa = [
	["Billy Firdaniel", "203040063", "Teknik Informatika", "bfirdaniel@gmail.com"],
	["Fajar N", "203040055", "Teknik Industri", "fajarn1@yahoo.com"],
	["203040060", "Farhat", "Teknik Pangan", "farhat2020@gmail.com"]
];

/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 5 - 11 Maret  2021
Mempelajari Array
*/
?>

<?php
$mahasiswa = [
	["Farhat Abdurachman Aldjaidi", "203040060", "Teknik Informatika", "farhataldjaidi@gmail.com"],
	["Furqon", "203030055", "Teknik Mesin", "furqon2344@gmail.com"],
	["Imam", "203020066", "Ekonomi", "imamganteng@gmail.com"]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>