<?php
// tipe data integer

$umur = 20;

var_dump($umur);

// float
$phi = 3.14;

var_dump($phi);

// string
$nama = "Azza";
var_dump($nama);

echo "<br>";
echo "Hello $nama Umur saya $umur . Nilai 'phi' adalah $phi";

// boolean
$isStudent = true;

echo "<br>";
var_dump($isStudent);

// array indexing
$siswa = ["Azza", 18, true];

echo "<br>";
echo "Hallo nama saya $siswa[0], $siswa[1] tahun. ";

// array assosiatif 
$mahasiswa = ["nama => Sharma Azzahrah", "umur => 18", "ipk => 4.0"];
echo "<br>";

echo "Hai saya $mahasiswa[nama], saya seorang mahasiswa dengan ipk $mahasiswa[ipk]";
?>;