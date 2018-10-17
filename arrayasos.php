<?php
    // ARRAY PHP
    // array adalah sebuah variable yang dapat memiliki banyak nilai
    // element pada array boleh memilik tipe data yg berbeda
    // pasangan key dan value
    // key-nya adalah string yang kita buat sendiri
    // definisinya sama seperti aray numerik, kecuali keynya kita buat sendiri
    // ini adalah array assosiatif harus bikin indexnnya dulu
    // dihitung dari 0 indexnya
// Array Multidemnsonal lebih dari 1 array
$angka = [[1,2,3],[4,5,6],[7,8,9]];
echo $angka[1][0]; // yang keluar pasti 4
echo "<br>";

// lebih simple
$mahasiswa = [
    [
        "nama" => "Ferdi Pratama",
        "nim" => "11216050",
        "email" => "verdipratama@yahoo.com",
        "jurusan" => "Teknik Informatika",
        "tugas" => [90, 80, 100]
    ],
    [
        "nama" => "Feby Narathama",
        "nim" => "11216060",
        "email" => "verdipratama@yahoo.com",
        "jurusan" => "Teknik Informatika"
    ]
];
    echo $mahasiswa[0]["tugas"][0]; //dihitung dari indexnya 0 [yg di dlm tutup kurung] dimulai dari 0
?>