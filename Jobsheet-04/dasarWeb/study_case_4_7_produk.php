<?php 
    // Harga Produk yang ingin dibeli pelanggan 
    $bayarPelanggan = 120000;
    echo "Total pembayaran yang pelanggan berikan Rp. $bayarPelanggan <br><br>";
    
    // Diskon yang diberikan oleh toko jika pembayaran > Rp. 100.000
    $diskonToko = 20 / 100;

    // Jika pembayaran > Rp. 100.000, maka diskon 20%
    if ($bayarPelanggan > 100000) {
        echo "Yey! Kamu mendapatkan diskon 20% <br>";
        $bayarPelanggan -= $bayarPelanggan * $diskonToko;
        echo "Total Pembayaran setelah diskon: Rp. $bayarPelanggan";
    } else {
        echo "Total Pembayaran: Rp. $bayarPelanggan";
    }
?>