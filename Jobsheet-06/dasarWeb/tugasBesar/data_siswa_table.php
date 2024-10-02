<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <title>Tugas Besar Table - Aakhif</title>
    <style>
        #section {
            display: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr {
            text-align: center;
        }

        table tr th {
            padding: 30px;
        }

        table tr td {
            padding: 15px;
        }

        button {
            width: 100%;
            height: 50px;
        }
    </style>
</head>

<body>
    <!-- +JQUERY JANGAN LUPA -->
    <h2>Data Siswa</h2>

    <?php
    $dataSiswa = array(
        array(
            'nama' => 'Aakhif',
            'umur' => 19,
            'kelas' => '10A',
            'alamat' => 'malang'
        ),
        array(
            'nama' => 'Danen',
            'umur' => 19,
            'kelas' => '10B',
            'alamat' => 'karanglo'
        ),
        array(
            'nama' => 'Dhanil',
            'umur' => 50,
            'kelas' => '10C',
            'alamat' => 'padang'
        ),
        array(
            'nama' => 'Rengga',
            'umur' => 25,
            'kelas' => '10D',
            'alamat' => 'bumi'
        )
    ); 
    ?>

    <script>
        $(document).ready(function () {
        $("#navbarToggle").click(function () {
          $("#section").slideToggle("slow");
        });
      });
    </script>

    <button id="navbarToggle" onclick="toggleAction()">Click to Expand</button>
    <div id="section">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <tr>
                <?php 
                foreach ($dataSiswa as $siswa) {
                    echo "<tr>";
                    echo "<td>{$siswa['nama']}</td>";
                    echo "<td>{$siswa['umur']}</td>";
                    echo "<td>{$siswa['kelas']}</td>";
                    echo "<td>{$siswa['alamat']}</td>";
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>
        <h2 id="rataRata">Rata-rata Umur Siswa: ... tahun</h2>
    </div>

    
    <script>
        var isExpanded = false;

        // Penghitungan rata-rata umur siswa
        var rataRataUmur = 0;
        
        function hitungRataRataUmur() {
            // Mengambuil data table data mahasiswa
            var dataSiswa = <?php echo json_encode($dataSiswa); ?>;
            var totalUmur = 0;
            for (var i = 0; i < dataSiswa.length; i++) {
                totalUmur += dataSiswa[i].umur;
            }
            rataRataUmur = (totalUmur / dataSiswa.length).toFixed(2);

            document.getElementById('rataRata').innerHTML = "Rata-rata Umur Siswa: " + rataRataUmur + " tahun";
        }

        hitungRataRataUmur();

        function toggleAction(){
            isExpanded = !isExpanded;
            console.log(isExpanded);
            document.getElementById('navbarToggle').innerHTML = (isExpanded) ? "Click to Collapse" : "Click to Expand";
        }
    </script>
</body>

</html>