<?php
echo "************************<br>";
echo "Luas Bangun Datar Persegi<br>";
echo "Rumus Luas Persegi = Sisi x Sisi<br>";
echo "Rumus Luas Persegi = Sisi^2<br>";
echo "Jika Sisi Persegi = 3 cm<br>";
$s = 3;
$luas_persegi = $s**2;
echo "Maka Luas Persegi = " .$luas_persegi. " cm^2<br>";

echo "************************<br>";
echo "Luas Bangun Datar Persegi Panjang<br>";
echo "Rumus Luas Persegi Panjang = Panjang x Lebar<br>";
echo "Rumus Luas Persegi Panjang = p x l<br>";
echo "Jika Panjang dan Lebar Persegi Panjang = 2 cm dan 5 cm<br>";
$a = 2;
$b = 5;
$luas_persegipanjang = $a * $b;
echo "Maka Luas Persegi Panjang= " .$luas_persegipanjang. " cm^2<br>";

echo "************************<br>";
echo "Luas Bangun Datar Segitiga<br>";
echo "Rumus Luas Segitiga = Alas x Tinggi / 2<br>";
echo "Rumus Luas Segitiga = a x t /2<br>";
echo "Jika Alas dan Tinggi Segitiga = 4 cm dan 7 cm<br>";
$a = 4;
$b = 7;
$luas_segitiga = $a * $b / 2;
echo "Maka Luas Segitiga= " .$luas_segitiga. " cm^2<br>";

echo "************************<br>";
echo "Luas Bangun Datar Trapesium<br>";
echo "Rumus Luas Trapesium = (Sisi Atas + Sisi Bawah) * Tinggi / 2<br>";
echo "Rumus Luas Trapesium = (a + b) x t /2<br>";
echo "Jika Sisi Atas, Sisi Bawah dan Tinggi Trapesium = 13 cm, 12 cm, dan 4 cm<br>";
$a = 13;
$b = 12;
$c = 4;
$luas_trapesium = ($a + $b) * $c / 2;
echo "Maka Luas Trapesium= " .$luas_trapesium. " cm^2<br>";

echo "************************<br>";
echo "Luas Bangun Datar Jajargenjang<br>";
echo "Rumus Luas Jajargenjang = Alas x Tinggi<br>";
echo "Rumus Luas Jajargenjang = a x t<br>";
echo "Jika Alas dan Tinggi Jajargenjang = 10 cm dan 5 cm<br>";
$a = 10;
$b = 5;
$luas_jajargenjang = $a * $b;
echo "Maka Luas Persegi Panjang= " .$luas_jajargenjang. " cm^2<br>";
?>