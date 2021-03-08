<?php
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 4 - 3 Maret Februari 2021
Mempelajari FUNCTION
*/
?>

<?php
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama !";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Farhat"); ?></h1>
</body>
</html> 