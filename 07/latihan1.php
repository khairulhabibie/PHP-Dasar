<!-- GET -->

<?php 
// variabel scope / lingkup variabel
// SUPERGLOBAL
// $_GET
// $_POST
// $_SESSION
// $_COOKIE
// ... $_REQUEST, $_FILES, $_ENV

$mahasiswa = [
    ["nama" => "khairul", 
    "NIM" => "140310160062", 
    "jurusan" => "fisika", 
    "email" => "khairul01@gmail.com",
    "gambar" => "khairul.png"

    ],
    ["nama" => "habibie", 
    "NIM" => "140310160063", 
    "jurusan" => "informatika", 
    "email" => "habibie02@gmail.com",
    "gambar" => "habibie.png"
    ]
];

// var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
    <?php foreach($mahasiswa as $mhs) :?>
    <li>
        <a href="latihan2.php?nama=<?=$mhs["nama"];?>&NIM=<?=$mhs["NIM"];?>&jurusan=<?=$mhs["jurusan"];?>&gambar=<?=$mhs["gambar"];?>&email=<?= $mhs["email"]?>"><?= $mhs["nama"]?></a>
    </li>
    <?php endforeach;?>
</ul>
</body>
</html>