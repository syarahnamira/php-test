<?php
function calculateSetyoMoney(){
    $uangSepuluhRibuan = 3 * 10000;
    $uangLimaRibuan = 4 * 5000;
    $uangDuaPuluhRibuan = 5 * 20000;
    $hargaMainan = 55000;

    $totalUang = $uangSepuluhRibuan + $uangLimaRibuan + $uangDuaPuluhRibuan;
    $sisaUang = $totalUang - $hargaMainan;

    echo "Total uang: Rp. $totalUang\n";
    echo "Harga mainan: Rp. $hargaMainan\n";
    echo "Sisa uang: Rp. $sisaUang\n";
}

calculateSetyoMoney();
?>