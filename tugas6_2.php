<?php
$hargaJambu = 15000;
$jumlahDus = 6;
$hargaDus = 2000;

$penjualanJambu = 5 * $jumlahDus * $hargaJambu;
$penjualanDus = $jumlahDus * $hargaDus;

$total = $penjualanJambu + $penjualanDus;

echo "Harga Jambu = Rp $hargaJambu <br>";
echo "Harga Kardus = Rp $hargaDus <br>";
echo "Total Penjualan (Dus dan Jambu) = Rp $total";
