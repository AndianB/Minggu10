<?php
$nilai = 73;
echo "Nilai angka adalah ", $nilai, "<br>";
switch ($nilai){
    case ($nilai >= 90 && $nilai <= 100):
        echo "Nilai Huruf A";
        break;
    
    case ($nilai >= 80 && $nilai <= 89):
        echo "Nilai Huruf B";
        break;

    case ($nilai >= 70 && $nilai <= 79):
        echo "Nilai Huruf C";
        break;

    case ($nilai >= 0 && $nilai <= 69):
        echo "Nilai Huruf D";
        break;
}

?>