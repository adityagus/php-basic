<?php 
// array
// variabel yang menampung banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan  antara key dan value 
// key nya adalah index, yang  dimulai dari 0



$nama = "Aditya Gustian";

// membuat array
// cara lama
$hari = array ("Senin", "Selasa", "Rabu");
// Cara Baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari)








?>