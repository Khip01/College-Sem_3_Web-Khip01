<?php
    // skor dari pemain
    $skorPemain1 = [100, 150, 50, 50, 50];
    $skorPemain2 = [50, 50, 250, 200, 50];

    // menampilkan masing2 skornya
    showScore("Skor Pemain 1", $skorPemain1);
    showScore("Skor Pemain 2", $skorPemain2);

    echo "<br>";

    // Menjumlahkan semua skor
    $skorPemain1Total = sumOfScores($skorPemain1);
    $skorPemain2Total = sumOfScores($skorPemain2);
    
    echo "Total Skor dari Pemain 1 adalah: $skorPemain1Total (poin)<br>";
    echo "Total Skor dari Pemain 2 adalah: $skorPemain2Total (poin)<br>";

    echo "<br>";

    // Menampilkan hasil dari permainan, apakah dia mendapatkan hadiah/tidak
    showResult("Pemain 1", $skorPemain1Total);
    showResult("Pemain 2", $skorPemain2Total);


    // FUNGSI
    function showScore($title, $array){
        echo "$title <br>";
        echo "[ ";
        foreach ($array as $skor) {
            echo "$skor ";
        }
        echo "] <br>";
    }

    function sumOfScores($array){
        $total = 0;
        foreach ($array as $skor) {
            $total += $skor;
        }
        return $total;
    }

    function showResult($namaPemain, $skorTotal){
        $resultOutput = ($skorTotal > 500) ? "YA": "TIDAK"; // Ternary Operator
        echo "Apakah $namaPemain mendapatkan hadiah tambahan? $resultOutput <br>"; 
    }
?>