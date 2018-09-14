<?php
echo "Menampilkan bilangan ASCII";
for ($i=1; $i<=256; $ii) {
    echo "<br>$i.\t". chr($i);
}
?>