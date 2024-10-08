<?php 
// Cara 1: Menambahkan definisi variabel input dalam method _POST
// $_POST = array("input" => "<script>alert('Hacked!')</script>");

// Cara 2: Memberikan kondisi pengecekan apakah variabelnya sudah didefinisikan atau belum
// if (isset($_POST['input'])) {
//     $input = $_POST['input'];
//     $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
// }

// Memeriksa apakah input adalah email yang valid
// $email = isset($_POST['email']) ? $_POST['email'] : '';
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     // Lanjutkan dengan pengolahan email yang aman
//     echo "Melanjutkan dengan pengolahan email yang aman";
// } else {
//     // Tangani input yang tidak valid
//     echo "Menangani input yang tidak valid";
// }
// ?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Input PHP</title>
</head>

<body>
    <h2>Form Input PHP</h2>
    <?php
    // Inisialisasi variabel
    $inputErr = "";
    $input = "";
    $emailErr = "";
    $email = "";
    
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi nama (contoh: pastikan nmaa tidak kosong)
        if (empty($_POST["nama"]) || empty($_POST["email"])) {
            if (empty($_POST["nama"])) {
                $inputErr = "Nama harus diisi!";
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email harus diisi!";
            }
        } else {
            $input = $_POST['nama'];
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Lanjutkan dengan pengolahan email yang aman
                $input = $_POST['nama'];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                $email = $_POST['email'];
                echo "Data berhasil disimpan!";
            } else {
                // Tangani input yang tidak valid
                $emailErr = "Email tidak valid!";
                echo "Data gagal disimpan!";
            }
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" value="<?php echo $input; ?>"> <br>
        <label for="nama">Email: </label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <br><span><?php echo $inputErr; ?></span>
        <br><span><?php echo $emailErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">

        <p>
            <?php 
            if (empty($input) == false) {
                echo "Input nama  : " . $input . "<br>";
                echo "Input email : " . $email . "<br>";
            }
            ?>
        </p>
    </form>
</body>

</html>