<?php
// Tangkep data input
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$tugas = $_POST["tugas"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];

// Tampilin Hasil Data
echo "Nama lengkap : " . $nama;
echo "<br>";
echo "Mata Kuliah : " . $matkul;
echo "<br>";
echo "tugas : " . $tugas;
echo "<br>";
echo "uts : " . $uts;
echo "<br>";
echo "uas : " . $uas;
echo "<br>";

?>