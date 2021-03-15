<?php 
$mahasiswa =  [
    ["Aditya Gustian","932019028", "Teknik Elektronika", "Adityagustian11@gmail.com"],
    ["Arif Mulia Rahman", "922019065", "Teknik Mesin", "Arif.muliarahman@gmail.com"],
    ["Adil Adi", "920391802", "Teknik Sipil", "Adisamsum001@gmail.com" ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama: <?= $mhs[0]; ?></li>
    <li>Nim: <?= $mhs[1]; ?></li>
    <li>Jurusan: <?= $mhs[2]; ?></li>
    <li>E-mail: <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>