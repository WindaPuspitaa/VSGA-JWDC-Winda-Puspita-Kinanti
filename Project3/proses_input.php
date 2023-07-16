<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $no = $_POST['no'];
    $nama_merek = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO printer VALUES('$no', '$nama_merek', '$warna', '$jumlah')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - ") . mysqli_error($link);
    }
}

header(("location:index.php"));
