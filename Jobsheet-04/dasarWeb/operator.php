<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// output hasil
echo "Hasil penjumlahan $a dan $b adalah $hasilTambah <br>";
echo "Hasil pengurangan $a dan $b adalah $hasilkurang <br>";
echo "Hasil perkalian $a dan $b adalah $hasilkali <br>";
echo "Hasil pembagian $a dan $b adalah $hasilBagi <br>";
echo "Sisa bagi $a dan $b adalah $sisaBagi <br>";
echo "Hasil pangkat $a pangkat $b adalah $pangkat <br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// output hasil
echo "Apakah $a sama dengan $b? " . ($hasilSama ? 'true' : 'false') . " <br>";
echo "Apakah $a tidak sama dengan $b? " . ($hasilTidakSama ? 'true' : 'false') . " <br>";
echo "Apakah $a lebih kecil dari $b? " . ($hasilLebihKecil ? 'true' : 'false') . " <br>";
echo "Apakah $a lebih besar dari $b? " . ($hasilLebihBesar ? 'true' : 'false') . " <br>";
echo "Apakah $a lebih kecil atau sama dengan $b? " . ($hasilLebihKecilSama ? 'true' : 'false') . " <br>";
echo "Apakah $a lebih besar atau sama dengan $b? " . ($hasilLebihBesarSama ? 'true' : 'false') . " <br>";


$hasiland = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// output hasil
echo "Apakah $a dan $b? " . ($hasiland ? 'true' : 'false') . " <br>";
echo "Apakah $a atau $b? " . ($hasilor ? 'true' : 'false') . " <br>";
echo "Apakah bukan $a? " . ($hasilNotA ? 'true' : 'false') . " <br>";
echo "Apakah bukan $b? " . ($hasilNotB ? 'true' : 'false') . " <br>";


// output hasil
$a += $b;
echo "Hasil penjumlahan $a dan $b adalah $a <br>";
$a -= $b;
echo "Hasil pengurangan $a dan $b adalah $a <br>";
$a *= $b;
echo "Hasil perkalian $a dan $b adalah $a <br>";
$a /= $b;
echo "Hasil pembagian $a dan $b adalah $a <br>";
$a %= $b;
echo "Sisa bagi $a dan $b adalah $a <br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// output hasil
echo "Apakah $a identik dengan $b? " . ($hasilIdentik ? 'true' : 'false') . " <br>";
echo "Apakah $a tidak identik dengan $b? " . ($hasilTidakIdentik ? 'true' : 'false') . " <br>";

?>