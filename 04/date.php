<!-- 
    referensi : http://php.net/en/funcref.php

    DATE/ TIME 
    - time()
    - date()
    - mktime()
    - strtotime()
 -->

<?php

// date()
echo date("l, d-M-Y");

// time()
// UNIX Timestamp / EPOCH time : waktu yang sudah berlalu sejak 1 jan 1970
echo time();
echo date("l, d M Y", time()+60*60*24*100);
echo date("l, d M Y", time()-60*60*24*100);

// mktime()
// membuat sendiri detik yang telah berlalu
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,4,10,1998));

// strtotime()
echo date("l", strtotime("10 apr 1998"));
?>

<!-- 
STRING
    - strlen() : menghitung panjang string
    - strcmp() : membandingkan string
    - explode() : memecah string menjadi array
    - htmlspecialchars()

ULITITY : FUNGSI BANTUAN
    - var_damp() : mencetak isi dari sebuah variabel
    - isset()   : cek apakah variabel telah pernah dibuat atau belum
    - empty()   : apakah variabel kosong atau tidak 
    - die()     : untuk menghentikan program
    - sleep()   : untuk menghentikan program semeetara
-->
