<?php

$uang=10000;
$harga=15000;


if ($uang>=$harga){
    echo "Saya Mau beli Nasi goreng seharga $harga, uang saya sekarang $uang";
    echo "<br>Berarti uang saya <b>Cukup!!</b>";
}else {
    echo "Saya Mau beli Nasi goreng seharga $harga, tetapi uang saya sekarang $uang";
    echo "<br>Berarti uang saya <b>Tidak Cukup atau Kurang!!</b>";
}