<?php
if(isset($_POST['pilih'])){
    $film = $_POST['kartun'];
    echo "Film kartun Favorit anda adalah : <font color=blue><b>$film</b></font>";
}
?>