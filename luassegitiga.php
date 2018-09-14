<?php
function luas_segitiga ($alas, $tinggi){
    return ($alas * $tinggi) / 2;
}
//pemanggilan fungsi
$a = 5;
$t = 8;
echo "Luas segitiga adalah $a x $t / 2 = ";
echo luas_segitiga ($a, $t);
?>