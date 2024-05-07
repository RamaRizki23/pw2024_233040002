<?php
function cetak_bintang($n) {
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>