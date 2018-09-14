<?php
$hari = 50000;
$makan = 25000;
$minum = 10000;

$jumlah = ($makan+$minum );
$sisa = $hari - $jumlah;
echo "Uang hari : Rp. $hari <br>";
echo "Makan : Rp. $makan <br>";
echo "Minum : Rp. $minum <br>";
echo "Hari menghabiskan Uang sebesar : $jumlah <br>";
echo "Sisa Uang Hari : Rp. $sisa <br>";
if ($sisa >= 15000){
    echo "dan Hari  <b>Hemat </b>";
} else{
    echo "dan Hari Boros";
}
?>