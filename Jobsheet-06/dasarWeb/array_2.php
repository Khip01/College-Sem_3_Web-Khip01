<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array 2</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table tr {
            text-align: center;
        }

        table tr th {
            padding: 15px;
            border: 1px solid black;
        }

        table tr td {
            padding: 15px;
            border: 1px solid black;
        }

        .centered-div {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis kelamin' => 'Perempuan'
    ];
    // echo "Nama : {$Dosen['nama']} <br>";
    // echo "Domisili : {$Dosen['domisili']} <br>";
    // echo "Jenis Kelamin : {$Dosen['jenis kelamin']} <br>";
    ?>
    <div class="centered-div">
        <table style="width: 50%;">
            <tr>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
            <tr>
                <td><?php echo $Dosen['nama']; ?></td>
                <td><?php echo $Dosen['domisili']; ?></td>
                <td><?php echo $Dosen['jenis kelamin']; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>