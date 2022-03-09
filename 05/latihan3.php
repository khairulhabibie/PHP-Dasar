<?php 
$mahasiswa = [
    ["khairul habibie", "140310160062", "fisika", "khairulhabibie01@gmail.com"],
    ["sandika galih", "140110160063", "matematika", "sandikagalih02@gmail.com"],
    ["anies", "140210160064", "statistika", "anies03@gmail.com"]
];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>Nama: <?= $mhs[0];?></li>
        <li>NIM : <?= $mhs[1];?></li>
        <li>Jurusan : <?= $mhs[2];?></li>
        <li>Email : <?= $mhs[3];?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>