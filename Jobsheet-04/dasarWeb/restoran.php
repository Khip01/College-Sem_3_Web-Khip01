<?php 
    /* Soal
        Ada soal cerita : Sebuah restoran memiliki 45 kursi di dalamnya. 
        Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
        Berapa persen kursi yang masih kosong di restoran tersebut? 
    */

    // Kursi yang ada di restoran
    // Mengapa konstan? Karena memang jumlah kursi di restoran tidak akan berubah-ubah
    define("JUMLAH_KURSI", 45);

    // Variabel kursi mula mula disimpan di variabel $kursi
    $kursi = JUMLAH_KURSI;
    echo "Jumlah kursi awal di sebuah restoran: $kursi <br>";

    // Kursi yang ditempati
    $kursiDitempati = 28;
    echo "Ternyata sekarang kursi yang ditempati ada $kursiDitempati kursi <br>"; 
    
    // Sehingga Kursi yang kosong tadi/kursi awal dikurangi dengan kursi yang ditempati
    $kursi -= $kursiDitempati;
    echo "Sehingga kursi yang kosong ada total $kursi kursi <br>";

    // lalu menghitung persenan kursi 
    $persenKursiKosong = round(($kursi / JUMLAH_KURSI) * 100);
    echo "Persen kursi yang kosong adalah $persenKursiKosong %";
?>