<?php

echo "Mulai. <br>";

echo "Hello World! <br>";

$nilai_awal =5;
while ($nilai_awal <= 100) {
    echo "Hello world $nilai_awal x! <br>";
    $nilai_awal = $nilai_awal + 5;
}

echo " Selesai. <br>";

echo "<hr>";


echo "Mulai <br>";
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal = $nilai_awal + 1) {
    echo " Hellow World 1 x! <br>";
}
echo "Selesai <br>";

echo "<hr>";

echo "Mulai <br>";
for ($i = 1; $i <= 10; $i = $i + 1) {
    echo " Hellow World 1 x! <br>";
}
echo "Selesai <br>";

echo "<hr>";

echo "Mulai <br>";
for ($i = 10; $i >= 1; $i--) {
    echo " Hellow World $i x! <br>";
}
echo "Selesai <br>";