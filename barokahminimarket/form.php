<?php
include ('conn.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $nama_produk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $harga_satuan = $_POST['harga_satuan'];

    $sql ="INSERT INTO produk (sku, nama_produk, kategori, jumlah_stok, harga_satuan)
             VALUES ('$sku', '$nama_produk', '$kategori', '$jumlah_stok', '$harga_satuan')";
    $res = mysqli_query(connection(), $sql);
    header("Location: http://localhost/barokahminimarket/");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>InputProduk</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <style>
		body{
		background-color:#ff9999
		}
	</style>

    <body>
        <center><h1>Input Produk</h1></center>
        <form action="form.php" method="POST">
        <div class="form">
        <table border="0px" cellpadding="3px">
            <tr>
                <td>SKU </td> 
                <td align= center> : </td>
                <td><input type="text" name="sku"><br></td>
            </tr>
            <tr>
                <td>Nama Poduk </td>
                <td align= center> : </td>
                <td><input type="text" name="nama_produk"><br></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td align= center> : </td>
                <td><select name="kategori">
                    <option selected disabled> ----Pilih----</option>
                    <option value="makanan">makanan</option>
                    <option value="minuman"> minuman</option>
                </select>
                <br>
                </td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td align= center> : </td>
                <td><input type="text" name="jumlah_stok"><br></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td align= center> : </td>
                <td><input type="text" name="harga_satuan"><br></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
        </div>
        </form>
    </body>
</html>