<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <!-- <form method="post" action="proses_validasi.php"> -->
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <label for="pass">Password:</label>
        <input type="text" id="pass" name="pass">
        <span id="pass-error" style="color: red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <br>

    <div id="hasil">
        <!-- Hasil akan ditampilkan disini -->
    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var pass = $("#pass").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (pass === "") {
                    $("#pass-error").text("Password harus diisi.");
                    valid = false;
                } else {
                    $("#pass-error").text("");
                }
                
                if (!valid) {
                    // Menghentikan pengiriman form jika validasi gagal
                    event.preventDefault();
                } else {
                    event.preventDefault(); // Mencegah pengiriman form secara default
                    // Mengumpulkan data form
                    var formData = $("#myForm").serialize();
                    
                    // Kirim data ke server PHP
                    $.ajax({
                        url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>