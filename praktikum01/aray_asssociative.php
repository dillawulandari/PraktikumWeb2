<?php

//Bikin variable array asosiatif
$mahasiswa = [
    "nama" => "Dilla",
    "umur" => 20,
    "alamat" => "Bekasi"
];

echo $mahasiswa["nama"];
echo "<br>";

foreach ($mahasiswa as $mhs)
    echo $mhs . "<br>";

?>