<?php
function luas_persegi ($panjang, $lebar){
    return $panjang * $lebar;
}
//pemanggilan fungsi
$p = 10;
$l = 5;
echo "Luas persegi panjang adalah $p x $l = ";
echo luas_persegi($p, $l);
?>