<?php
$nama = "Andian Bramlie";
$tinggi_badan = 1.65;
$berat_badan = 78;

$bmi = $berat_badan / $tinggi_badan**2;
if ($bmi < 17 ){
    $kategori = "Kurus";
}
else if($bmi < 18.5) {
    $kategori = "Kurus";
}
else if($bmi < 25) {
    $kategori = "Normal";
}
else if($bmi < 27) {
    $kategori = "Gemuk";
}
else {
    $kategori = "Gemuk";
}
echo "Halo, " .$nama. ". Nilai BMI Anda adalah " .number_format((float)$bmi, 2, '.', ''). ", Anda termasuk kategori " .$kategori. "."; 
?>