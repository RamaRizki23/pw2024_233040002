<?php
// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Rama", 3.1, false];

// 2. Mencetak isi Array
// Mencetak 1 nilai pada Array, menggunakan index
// Index dimulai 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// Cetak semua isi Array
// Var dump()
// Digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<br>";
echo "<hr>";

// 3. Memanipulasi isi Array
// Menambah isi Array
// di akhir: [] atau array_push();
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// di awal: array_unshift();
array_unshift($mahasiswa, "233040002");
print_r($mahasiswa);
echo "<hr>";

// Menghapus isi Array
// di belakang: array_pop();
// di depan: array_shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);