<?php 
    // Daftar nilai siswa
    $daftarNilai = [
        ["Alice", 85],
        ["Bob", 92],
        ["Charlie", 78],
        ["David", 64],
        ["Eva", 90],
    ];

    // Menampilkan daftar nilai lulus
    showStudentsScore("Daftar Nilai Siswa", $daftarNilai);
    
    // Menghitung rata-rata nilai siswa
    $scoresAverage = countAverage($daftarNilai);

    echo "<br>";

    // Menampilkan rata-rata nilai
    echo "Rata-rata Nilai Siswa adalah: $scoresAverage <br>";

    echo "<br>";

    // Menampilkan siswa yang nilainya diatas rata-rata kelas
    echo "Siswa yang mendapatkan nilai diatas rata-rata: <br>";
    foreach ($daftarNilai as $nilai) {
        if ($nilai[1] > $scoresAverage) {
            echo $nilai[0] . " dengan nilai " . $nilai[1] . "<br>";
        }
    }

    // FUNGSI
    function showStudentsScore($title, $array){
        echo "$title <br>";
        echo "[ ";
        foreach ($array as $skor) {
            echo "$skor[0] = $skor[1]; ";
        }
        echo "] <br>";
    }

    function countAverage($array){
        $total = 0;
        foreach ($array as $skor) {
            $total += $skor[1];
        }
        return $total / count($array);
    }
?>