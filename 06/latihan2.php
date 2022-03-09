<?php 
$mahasiswa = [
    ["nama" => "khairul", 
    "NIM" => "140310160062", 
    "jurusan" => "fisika", 
    "email" => "khairulhabibie01@gmail.com",
    "gambar" => "khairul.png"

    ],
    ["nama" => "habibie", 
    "NIM" => "140310160063", 
    "jurusan" => "informatika", 
    "email" => "sandikagalih@gmail.com",
    "tugas" => [90,80, 100],
    "gambar" => "habibie.png"
    ]
];
    
// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) :?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"] ?>">
    </li>
    <li>Nama: <?= $mhs["nama"]; ?> </li>
    <li>NIM: <?= $mhs["NIM"];?> </li>
    <li>Jurusan: <?= $mhs["jurusan"];?> </li>
    <li>email: <?= $mhs["email"];?> </li>
</ul>
<?php endforeach;?>

</body>
</html>