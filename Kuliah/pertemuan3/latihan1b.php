<?php 
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 3 - 24 Februari 2021
Mempelajari Struktur Kendali (Contra Flow)
*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>latihan1</title>
    <style>
    .warna-baris {
        background-color: silver;
    }
    </style>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">
		<?php 
			for ( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 0 ) : ?>
			<tr class="warna-baris">
            <?php else : ?>
            <tr>
        <?php endif ?>
				<?php for ( $j = 1; $j <= 5; $j++ ) : ?>
					<td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
				</tr>
                <?php endfor; ?>
	</table>

</body>
</html>