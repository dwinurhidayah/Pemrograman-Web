<?php
include('conn.php');

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM produk WHERE nama_produk LIKE '%" . $cari . "%' OR sku LIKE '%" . $cari . "%' OR kategori LIKE '%" . $cari . "%'";
    $search = mysqli_query(connection(), $query);
} else {
    $query = "SELECT * FROM produk";
    $search = mysqli_query(connection(), $query);
}
?>

<html>

<head>
    <title>Search</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
		body{
		background-color:#ff9999
		}
	</style>

<body>
    <div class="container">
    <center><h1>HASIL PENCARIAN</h1></center>
    <div class="search">
        <table border="1px">
            <tr>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah Stok</th>
                <th>Harga Satuan</th>
            </tr>

            <?php while ($data = mysqli_fetch_array($search)) : ?>
                <tr>
                    <td><?php echo $data['sku']; ?></td>
                    <td><?php echo $data['nama_produk']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['jumlah_stok']; ?></td>
                    <td><?php echo $data['harga_satuan']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <button onclick="window.location.href='http://localhost/barokahminimarket/'">Back</button>
    </div>
    
</body>

</html>