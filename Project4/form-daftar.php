<?php
include 'helper/koneksi.php';
if (isset($_POST['nama'])) {
    $nama = mysqli_real_escape_string($link, $_POST['nama']);
    $alamat = mysqli_real_escape_string($link, $_POST['alamat']);
    $gender = mysqli_real_escape_string($link, $_POST['gender']);
    $agama = mysqli_real_escape_string($link, $_POST['agama']);
    $asal = mysqli_real_escape_string($link, $_POST['asal']);

    $query_insert = "INSERT INTO tbl_pendaftaran(nama,alamat,gender,agama,sekolah_asal) values ('" . $nama . "','" . $alamat . "','" . $gender . "','" . $agama . "','" . $asal . "')";
    //$hasil=$conn->query($query_insert);
    $hasil = mysqli_query($link, $query_insert);
    if ($hasil) {
        header("location:index.php?status=sukses");
    }
}
?>

<html>

<head>
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body style="padding: 15px;">
    <div class="card mx-auto col-6">
        <h5 class="card-header bg-primary text-white">Formulir Pendaftaran Siswa Baru</h5>
        <div class="card-body">
            <form action="form-daftar.php" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="2" cols="50" required></textarea><br>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="L" name="gender" required>
                        <label class="form-check-label" for="gender">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="P" name="gender" required>
                        <label class="form-check-label" for="gender">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select name="agama" class="form-select" required>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Protestan">Protestan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="asal" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal" placeholder="Nama Sekolah" required>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
</body>

</html>