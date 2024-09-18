<?php
    // Daftar Nilai 
    $daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    showArray("Daftar Nilai: <br>", $daftarNilai);

    echo "<br>";
    
    // Sort nilai
    rsort($daftarNilai);
    showArray("Sorted Daftar Nilai (Desc): <br>", $daftarNilai);
    
    echo "<br>";

    // Lalu membuat looping untuk penjumlahan nilai dan mengabaikan 2 nilai tertinggi dan 2 nilai ter-rendah
    $totalNilai = 0;
    $rataRata = 0;
    for ($i = 2; $i < count($daftarNilai) - 2; $i++) {
        $totalNilai += $daftarNilai[$i];
    }
    echo "Total Nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai ter-rendah: $totalNilai <br>";
    
    // Menghitung rata-rata
    $rataRata = $totalNilai / (count($daftarNilai) - 4);
    echo "Rata-rata Nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai ter-rendah: $rataRata <br>";

    // FUNGSI
    function showArray($judul, $array){
        echo $judul;
        echo "[ ";
        foreach ($array as $nilai) {
            echo "$nilai ";
        }
        echo "] <br>";
    }

?>