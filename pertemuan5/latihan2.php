<?php 
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 5 - 11 Maret Februari 2021
Mempelajari Array
*/
?>
<?php
// Pengulangan pada array
// for / foreach

$angka = [3,2,15,20,11,42,32,21];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear { clear: both; }
	</style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
	<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
	<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>



</body>
</html>