<?php

    include ('conn.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sku = $_POST['sku'];
        $nama_produk = $_POST['nama_produk'];
        $kategori = $_POST['kategori'];
        $jumlah_stok = $_POST['jumlah_stok'];
        $harga_satuan = $_POST['harga_satuan'];

    
        $sql ="UPDATE produk 
                SET sku = '$sku', nama_produk='$nama_produk', kategori='$kategori', jumlah_stok='$jumlah_stok', harga_satuan='$harga_satuan'
                WHERE sku = '$sku'";
        $res = mysqli_query(connection(), $sql);
        header("Location: http://localhost/barokahminimarket/");
    }


    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sku = $_GET['id'];
        $sql_get ="SELECT * FROM produk WHERE sku = $sku";
        $res_get = mysqli_query(connection(),$sql_get);
        
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Produk</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <style>
		body{
		background-color:#ff9999
		}
	</style>

    <body>
        <div class>
        <center><h1>Update Produk</h1></center>
        <form action="update.php" method="POST">
            <div class="update">
                <table border="0px" cellpadding="3px">
                    <?php while($data = mysqli_fetch_array($res_get)) : ?>
                    <tr>
                        <td>SKU</td>
                        <td align= center> : </td>
                        <td><input type="text" name="sku" value="<?php echo $data['sku']; ?>"><br></td>
                    </tr>
                    <tr>
                        <td>Nama Poduk </td>
                        <td align= center> : </td>
                        <td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"><br></td>
                    </tr>
                    <tr>
                        <td>Kategori </td>
                            <td align= center> : </td>
                            <td><select name="kategori">
                                <option selected disabled> ----Pilih----</option>
                                <option value="makanan"<?php echo $data['kategori']=='makanan'? 'selected="selected"' : '' ?>>Makanan</option>
                                <option value="minuman"<?php echo $data['kategori']=='minuman'? 'selected="selected"' : '' ?>> Minuman</option>
                            </select>
                            <br></td>
                    </tr>
                    <tr>
                        <td>Jumlah Stok </td>
                        <td align= center> : </td>
                        <td><input type="text" name="jumlah_stok" value="<?php echo $data['jumlah_stok']; ?>"><br></td>
                    </tr>
                    <tr>
                        <td>Harga Satuan</td>
                        <td align= center> : </td>
                        <td><input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>"><br></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Update"></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </form>
    </body>
</html>