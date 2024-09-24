<?php
// //membuat fungsi
// function perkenalan($nama, $salam="Assalamualaikum")
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Aakhif";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);


// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang)
// {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// echo "Umur saya adalah " . hitungUmur(2004, 2024) . "tahun";  // isi sesuai dengan tahun lahir kalian


// //membuat fungsi
// function hitungUmur ($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// function perkenalan ($nama, $salam="Assalamualaikum") {
//     echo $salam.",";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";

//     //memanggil fungsi lain
//     echo "Saya berusia ". hitungUmur(2004, 2024)." tahun<br/>";
//     echo "Senang berkenalan dengan anda<br/>";
// }
// //memanggil fungsi perkenalan
// perkenalan ("Aakhif", );

// function tampilkanHaloDunia() {
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

// for ($i=1; $i <=25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }

// function tampilkanAngka(int $jumlah, int $indeks = 1) {
//     echo "Perulangan ke-{$indeks} <br>";

//     //panggil diri sendiri selama $indeks <= $jumlah
//     if ($indeks <= $jumlah) {
//         tampilkanAngka ($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);

$menu = [
    [
        "nama" => "Beranda",
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung",
                    ],
                ],
            ],
            [
                "nama" => "Kuliner",
            ],
            [
                "nama" => "Hiburan",
            ],
        ],
    ],
    [
        "nama" => "Tentang",
    ],
    [
        "nama" => "Kontak",
    ],
];

function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>";
        echo $item['nama'];
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat ($menu);

?>