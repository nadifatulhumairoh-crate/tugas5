<?php
// Luas Persegi Panjang
$p = 10; // panjang
$l = 5;  // lebar
$luas_persegi_panjang = $p * $l;

// Luas Lingkaran
$r = 7; // jari-jari
$phi = 3.14;
$luas_lingkaran = $phi * $r * $r;

// Volume Kubus
$s = 4; // sisi kubus
$volume_kubus = $s * $s * $s;

// ~Keliling Segitiga
$a = 5; 
$b = 6;
$c = 7;
$keliling_segitiga = $a + $b + $c;

// 5. Rumus Pythagoras (c = √(a² + b²))
$a = 3;
$b = 4;
$c = sqrt(pow($a, 2) + pow($b, 2));

// Hasil Output
echo "1. Luas Persegi Panjang (p=10, l=5) = $luas_persegi_panjang <br>";
echo "2. Luas Lingkaran (r=7) = $luas_lingkaran <br>";
echo "3. Volume Kubus (s=4) = $volume_kubus <br>";
echo "4. Keliling Segitiga (5,6,7) = $keliling_segitiga <br>";
echo "5. Sisi Miring Segitiga (a=3, b=4) = $c <br>";
?>