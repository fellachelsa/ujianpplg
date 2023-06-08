<?php
$kalori = 2500;

#hitung jumlah kalori per hari
$senin = ($kalori + $kalori + $kalori);
$selasa = ($kalori + $kalori);
$rabu = ($kalori + $kalori);
$kamis = ($kalori + $kalori + $kalori);
$jumat = ($kalori + $kalori + $kalori);
$sabtu = ($kalori + $kalori);
$minggu = ($kalori);
echo "jumlah kalori per hari";
echo "</br>";
echo " senin = $senin";
echo "</br>";
echo " selasa = $selasa";
echo "</br>";
echo " rabu = $rabu";
echo "</br>";
echo " kamis = $kamis";
echo "</br>";
echo " jumat = $jumat";
echo "</br>";
echo " sabtu = $sabtu";
echo "</br>";
echo " minggu =$minggu";
$total =  $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;

#hitung jumlah kalori per minggu
echo "</br>";
echo "jumlah kalori perminggu adalah " , $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "</br>"; 
echo "</br>";


#hitung jumlah waktu istirahat per hari
$istirahat = 8;
$Senin = 5;
$Selasa =6;
$Rabu = 8;
$Kamis = 8;
$Jumat = 5;
$Sabtu = 6;
$Minggu = 4;
echo "jumlah waktu istirahat per hari";
echo "</br>";
echo " senin = $Senin";
echo "</br>";
echo " selasa = $Selasa";
echo "</br>";
echo " rabu = $Rabu";
echo "</br>";
echo " kamis = $Kamis";
echo "</br>";
echo " jumat = $Jumat";
echo "</br>";
echo " sabtu = $Sabtu";
echo "</br>";
echo " minggu =$Minggu";

#hitung jumlah waktu per minggu
echo "</br>";
$total_semua = $Senin + $Selasa + $Rabu + $Kamis + $Jumat + $Sabtu + $Minggu;
echo "</br>"; 
echo "Total Istirahat Fu selama 1 minggu ", $total_semua;

$jumlahkaloriperhari = 2500;
$jumlahkaloriperminggu = $total * 7;


$jumlahtidurperhari = $total_semua;
$jumlahwaktutidursatuminggu = $total_semua * 7;

$awalkalori = 4000;
$awaltidur = 42 ;
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

if($jumlahkaloriperminggu >= $awalkalori && $jumlahwaktutidursatuminggu >= $awaltidur) {
    echo "Fu sudah sembuh";
} else {
    echo "Fu masih sakit";
}