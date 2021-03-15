<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

//Standart Output
// echo, print
// print_r
// var_dump untuk mengecek jika ada saat di bugging, untuk mencari kesalahan dimana atau pengen tau isi variabel ini 
/* echo "Aditya Gustian";
echo 123;
print "Aditay Gustian";
echo true; */

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data 
// Variabel

/*     <!-- 1 -->
    <h1>Halo, Selamat Datang <?php  echo $nama; ?> </h1>
    <p> <?php echo "ini adalah paragraf"?></p>
    
    <!-- 2 -->
    <?php
        echo "<h1>Halo, Selamat Pagi disini saya ingin belajar php dasar </h1>"
    ?>
 */

// $nama = "Aditya Gustian";
// echo "Halo, nama saya $nama";

//  Opertator
// aritmatika
// + - x / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Aditya";
// $nama_belakang = "Gustian";
// echo "$nama_depan $nama_belakang";

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x; 
// $nama = "Aditya";
// $nama .= " ";
// $nama .= "Gustian";
// echo $nama;

//  Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(5 > 5);
// var_dump (1 == "1");

// identitas
// ===, !==
// var_dump (1 === "1");

// Logika
// && (and), || (or), !
// $x = 30;
// var_dump  ($x < 20 && $x %2 == 0);


$x = 53.847;
$y = 10.000;

echo $x + $y;









?>