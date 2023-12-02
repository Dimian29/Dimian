<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LATIHAN</title>
</head>
<body>
    <h2>PROGRAM LATIHAN</h2>
    <h3>DATA PEGAWAI</h3>
    <h4>Diyo Miftahul Anam</h4>
    
    <div class="form">
        <form method="POST" action="">
            <label for="nama">Nama pegawai:</label><br>
            <input type="text" id="nama" name="nama"><br> 
            <label for="agama">Agama:</label><br>
            <input type="text" id="agama" name="agama"><br>
            <label for="jabatan">Jabatan:</label><br>
            <input type="text" id="jabatan" name="jabatan"><br>
            <label for="status">Status:</label><br>
            <input type="text" id="status" name="status"><br>
            <label for="jumlah_anak">Jumlah anak:</label><br>
            <input type="number" id="jumlah_anak" name="jumlah_anak"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="pegawai-info">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jumlah_anak = $_POST['jumlah_anak'];

            echo "<p>Nama pegawai: $nama</p>";
            echo "<p>Agama: $agama</p>";
            echo "<p>Jabatan: $jabatan</p>";
            echo "<p>Status: $status</p>";

            // Tampilkan jumlah anak hanya jika status "Kawin"
            if ($status == "Kawin") {
                echo "<p class='jumlah-anak'>Jumlah anak: $jumlah_anak</p>";
            } else {
                echo "<p class='belum-kawin'>Jumlah anak: -</p>";
            }
        }
        ?>
    </div>
</body>
</html>