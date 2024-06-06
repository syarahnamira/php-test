<?php
function calculateChange(){
    $hargaPerBolpoin = 1750;
    $jumlahBeliBolpoin = 12;
    $uangBayar = 5 * 5000;

    $totalHarga = $hargaPerBolpoin * $jumlahBeliBolpoin;
    $kembalian = $uangBayar - $totalHarga;

    echo "Harga per bolpoin: Rp. $hargaPerBolpoin\n";
    echo "Jumlah beli: $jumlahBeliBolpoin buah\n";
    echo "Total harga: Rp. $totalHarga\n";
    echo "Uang dibayar: Rp. $uangBayar\n";
    echo "Uang kembalian: Rp. $kembalian\n";
}

calculateChange();
?>