<?php 
require_once "BarangGadai.php";

$barang = new BarangGadai();
$data = $barang->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pegadaian</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            padding: 30px;
        }
        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 8px #ccc;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #009879;
            color: white;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Data Barang Gadai</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Nasabah</th>
        <th>Barang</th>
        <th>Pinjaman</th>
    </tr>

    <?php while($row = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_nasabah']; ?></td>
        <td><?= $row['barang']; ?></td>
        <td>Rp <?= number_format($row['pinjaman'], 0, ',', '.'); ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
