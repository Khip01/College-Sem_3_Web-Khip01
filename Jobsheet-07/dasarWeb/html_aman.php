<?php 
// Cara 1: Menambahkan definisi variabel input dalam method _POST
// $_POST = array("input" => "<script>alert('Hacked!')</script>");

// Cara 2: Memberikan kondisi pengecekan apakah variabelnya sudah didefinisikan atau belum
// if (isset($_POST['input'])) {
//     $input = $_POST['input'];
//     $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
// }

// Memeriksa apakah input adalah email yang valid
$email = isset($_POST['email']) ? $_POST['email'] : '';
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lanjutkan dengan pengolahan email yang aman
    echo "Melanjutkan dengan pengolahan email yang aman";
} else {
    // Tangani input yang tidak valid
    echo "Menangani input yang tidak valid";
}
?>