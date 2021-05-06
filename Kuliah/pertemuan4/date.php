<?php
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 4 - 3 Maret Februari 2021
Mempelajari DATE
*/
?>

<?php
//  Date
//  Untuk menampilkan tanggal dengan format tertentu
//  echo date("l, d-M-Y");


//  Time
//  UNIX Timestamp / EPOCH time
//  detik yang sudah berlalu sejak 1 januari 1970
//  echo time();
//  echo date("l", time()-60*60*24*100);

//  mktime
//  membuat sendiri detik 
//  mktime(0,0,0,0,0,0)
//  jam, menit, detik, bulan, tanggal, tahun
//  echo date("l", mktime(0,0,0,8,25,1985));

//  Strtotime
echo date("l", strtotime("25 aug 1985"))
?>