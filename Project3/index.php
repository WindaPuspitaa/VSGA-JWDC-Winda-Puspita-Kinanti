<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Merek</th>
            <th>Warna</th>
            <th>Jumlah</th>
        </tr>

        <?php
        $query = "SELECT * FROM printer";
        $result = mysqli_query($link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>$data[no]</td>";
            echo "<td>$data[nama_merek]</td>";
            echo "<td>$data[warna]</td>";
            echo "<td>$data[jumlah]</td>";
        }
        ?>
    </table>
    <br>
    <a href="tambah.html">Tambah Data</a>
</body>

</html>