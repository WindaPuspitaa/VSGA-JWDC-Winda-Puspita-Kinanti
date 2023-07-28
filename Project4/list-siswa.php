<?php
include 'helper/koneksi.php';

$query = "select * from tbl_pendaftaran";
$hasil = mysqli_query($link, $query);
//jumlah data pada tabel
$jumlah = mysqli_num_rows($hasil);
?>

<html>

<head>
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body style="padding: 15px;">
    <h3>Siswa yang sudah mendaftar</h3>
    <div class="card">
        <div class="card-header">
            <a href="form-daftar.php" class="btn btn-primary">[+] Tambah Baru</a>
        </div>
        <div class="card-body">

            <table class="table" border="1px">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>lamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Asal SMK</th>
                </tr>
                <?php
                if ($jumlah > 0) {
                    while ($baris = mysqli_fetch_assoc($hasil)) {
                        echo ("<tr>
                            <td>" . htmlspecialchars($baris['no_daftar']) . "</td>
                            <td>" . htmlspecialchars($baris['nama']) . "</td>
                            <td>" . htmlspecialchars($baris['alamat']) . "</td>
                            <td>" . htmlspecialchars($baris['gender']) . "</td>
                            <td>" . htmlspecialchars($baris['agama']) . "</td>
                            <td>" . htmlspecialchars($baris['sekolah_asal']) . "</td>
                        </tr>");
                    }
                }
                ?>
            </table>
        </div>
    </div>

</body>

</html>

Total = <?php echo ($jumlah) ?>
<?php

mysqli_close($link);

?>