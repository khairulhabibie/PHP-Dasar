<?php 
// array : variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda 
// pasangan antara key dan value, key nya adalah index yang dimulai dari 0

// 01 - membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["jan", "feb","mar"];
$arr1 = [123, "tulisan", false]; 


// 02 - menampilkan array 
// var_dump()  atau print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo ($bulan[1]);

// menambah elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
?>