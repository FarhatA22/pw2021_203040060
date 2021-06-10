<?php
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 3 - 24 Februari 2021
Mempelajari Struktur Kendali (Contra Flow)
*/
?>

<?php
// Pengkondisian / Percabangan
// if else
// if else if
// ternary
// switch

// contoh 1
$x = 10;
if ($x < 20) {
    //apakah $x lebih kecil dari 20? maka hasilnya true atau benar
    echo "Benar <br>";    //10 lebih kecil dari 20 hasilnya true
} else {

    echo "Salah";
}

//contoh 2 
$x = 200;
if ($x > 100) {
    echo "Benar <br>";
} else {
    echo "Salah";
}

//contoh 3 + if else {
$x = 100;
if ($x > 100) {
    echo "Benar <br>";
} else if ($x == 100) {
    echo "Bingo!";
} else {
    echo "Salah";
}


?>