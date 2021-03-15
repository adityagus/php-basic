<?php 
//Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("F j, Y, g:i a");

// Time
// UNIX  Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time()

// echo date("l", time()+172800);
// echo "<br>";
// echo date("d M Y", time()-60*60*24*365*2);

// mktime
// membuat sendiri detik 
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,7,16,2001));


// strtotime
echo date("l", strtotime("16 jul 2001"));





?>