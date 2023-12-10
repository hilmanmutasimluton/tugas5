<?php

// Definisi variabel
$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05;
$hutang_b = 9500000;
$bunga_b = 0.045;

// Perhitungan
$total_hutang_a = $hutang_a + ($hutang_a "16500000" * $bunga_a "0.05");
$total_hutang_b = $hutang_b + ($hutang_b "9500000" * $bunga_b "0.045");
$total_hutang = $total_hutang_a + $total_hutang_b;

$sisa_uang = $pemasukan - $total_hutang;

$jumlah_bunga_a = $hutang_a * $bunga_a;
$jumlah_bunga_b = $hutang_b * $bunga_b;
$total_bunga = $jumlah_bunga_a + $jumlah_bunga_b;

// Tampilkan hasil
echo "Berapa sisa uang? " . number_format($sisa_uang, 0, ',', '.') . "\n";
echo "Berapa jumlah total bunga hutang? " . number_format($total_bunga, 0, ',', '.') . "\n";
echo "Berapa jumlah total hutang? " . number_format($total_hutang, 0, ',', '.') . "\n";

?>
