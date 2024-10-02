<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Besar List - Aakhif</title>
</head>

<body>
    <h1>Data Mahasiswa array multidimensi</h1>

    <?php
    $dataMahasiswaArray = array(
        array(
            'nama' => 'dina',
            'nim' => '123456',
            'jurusan' => 'teknik kimia',
            'email' => 'dina@gmail.com'
        ),
        array(
            'nama' => 'dino',
            'nim' => '9123124',
            'jurusan' => 'teknik listrik',
            'email' => 'dino@gmail.com'
        )
    );
    ?>

    <?php
    echo "<ul>";
    foreach ($dataMahasiswaArray as $listMahasiswa) {
        // var_dump($listMahasiswa);
        echo "<br>";
        // foreach ($listMahasiswa as $mahasiswa) {
        //     echo "<li>Nama:{$mahasiswa['nama']}</li>";
        //     echo "<li>Nim:{$mahasiswa['nim']}</li>";
        //     echo "<li>Jurusan:{$mahasiswa['jurusan']}</li>";
        //     echo "<li>Email:{$mahasiswa['email']}</li>";
        // }
        // for ($i = 0; $i < count($listMahasiswa); $i++) { 
        // }
        echo "<li>Nama:{$listMahasiswa['nama']}</li>";
        echo "<li>Nim:{$listMahasiswa['nim']}</li>";
        echo "<li>Jurusan:{$listMahasiswa['jurusan']}</li>";
        echo "<li>Email:{$listMahasiswa['email']}</li>";
    }
    echo "</ul>";
    ?>

    <!-- <ul>
        <li>Nama:dina</li>
        <li>Nim:123456</li>
        <li>Jurusan:teknik kimia</li>
        <li>Email:dina@gmail.com</li>
    </ul> -->
</body>

</html>