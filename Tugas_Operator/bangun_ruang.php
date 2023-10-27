<?php
echo "************************<br>";
echo "Volume Bangun Ruang Kubus<br>";
echo "Rumus Volume Kubus = Sisi x Sisi x Sisi<br>";
echo "Rumus Volume Kubus = Sisi^3<br>";
echo "Jika Sisi Kubus = 4 cm<br>";
$s = 4;
$luas_kubus = $s**3;
echo "Maka Volume Kubus = " .$luas_kubus. " cm^3<br>";

echo "************************<br>";
echo "Volume Bangun Ruang Balok<br>";
echo "Rumus Volume Balok = Panjang x Lebar x Tinggi<br>";
echo "Rumus Volume Balok = p x l x t<br>";
echo "Jika Pamjang, Lebar, dan Tinggi Balok = 6 cm, 7cm, dan 8cm<br>";
$a = 4;
$b = 7;
$c = 8;
$luas_balok = $s**3;
echo "Maka Volume Balok = " .$luas_balok. " cm^3<br>";

echo "************************<br>";
echo "Volume Bangun Ruang Prisma Segitiga<br>";
echo "Rumus Volume Prisma Segitiga = Luas Alas Segitiga x Tinggi<br>";
echo "Rumus Volume Prisma Segitiga = LA x t<br>";
echo "Jika Panjang Sisi Alas Segitiga, Tinggi Alas Segitiga, dan Tinggi Prisma Segitiga = 12 cm, 15cm, dan 20cm<br>";
$a = 12;
$b = 15;
$c = 20;
$luas_alas = $a * $b / 2;
$luas_prisma = $luas_alas * $c;
echo "Hitung Luas Alas Segitiga = ".$luas_alas. "cm^2<br>";
echo "Maka Volume Prisma Segitiga = " .$luas_prisma. " cm^3<br>";

?>