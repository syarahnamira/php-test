<?php
function calculateShopExpense($n) {
    $biayaAwal = 10000; 
    $biayaToko68 = 30100;
    $tambahSetiapToko = ($biayaToko68 - $biayaAwal) / 67;

    $biayaTokoN = $biayaAwal + ($tambahSetiapToko * ($n - 1));

    echo "Biaya pengeluaran untuk toko ke-$n adalah Rp. $biayaTokoN\n";
}

calculateShopExpense(81);
?>
