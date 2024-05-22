<?php
//Bikin array mahasiswa
$mahasiswa = ["adel","wahyu", "anggun"];

//Tampilin data pertama (adel)
echo $mahasiswa[0];
echo "<br>";

//Tampilin semua data array
foreach ($mahasiswa as $mhs) {
    echo $mhs . "<br>";
}

?>