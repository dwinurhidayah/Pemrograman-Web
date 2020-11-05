<?php
include('conn.php');

$min = $_POST["min_harga"];
$max = $_POST["max_harga"];
$query = "SELECT * FROM produk WHERE harga_satuan BETWEEN $min AND $max";
$filter = mysqli_query(connection(), $query);

?>

<html>

<head>
    <title>Filter Range Harga</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
		body{
		background-color:#ff9999
		}
	</style>

<body>
    
        <center><h1>FILTER RANGE HARGA</h1></center>
        <div class="tabel1">
            <table border="1px">
                <tr>
                    <th>SKU</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Jumlah Stok</th>
                    <th>Harga Satuan</th>
                </tr>

                <?php while ($data = mysqli_fetch_array($filter)) : ?>
                    <tr>
                        <td><?php echo $data['sku']; ?></td>
                        <td><?php echo $data['nama_produk']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo $data['jumlah_stok']; ?></td>
                        <td><?php echo $data['harga_satuan']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <br>
            <button onclick="window.location.href='http://localhost/barokahminimarket/'">Back</button>
        </div>
    
</body>

</html>