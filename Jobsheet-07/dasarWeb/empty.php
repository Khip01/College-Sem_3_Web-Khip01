<?php 

// $umur;
// if (isset($umur) && $umur >= 18) {
//     echo "Anda sudah dewasa.";
// } else {
//     echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
// }

// $data = array("nama" => "Jane", "usia" => 25);
// if (isset($data["nama"])) {
//     echo "Nama: " . $data["nama"];
// } else {
//     echo "Variabel 'nama' tidak ditemukan dalam array.";
// }

// $myArray = array(); // Array kosong
// if (empty($myArray)) {
//     echo "Array tidak terdefinisi atau kosong.";
// } else {
//     echo "Array terdefinisi dan tidak kosong.";
// }

if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi. <br> Variabel kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}

?>