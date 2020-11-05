<?php
include('conn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Barokah Minimarket</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <img src="minimarket.jpeg" alt="photo" id="minimarket" />
        <div class="teks">
                <p>BAROKAH MINIMARKET</p>
            </div>
        <div class="teks1">
            <p>Belanja Puas, Harga Pas..</p>
        </div>
       

    <?php
    $sql = "SELECT * FROM produk";
    $res = mysqli_query(connection(), $sql);
    ?>

    <div class="teks2">
            <p>Daftar Produk Barokah Minimarket</p>
    </div>
    <div class="tabel">
        <table border="1">
            <thead>
                    <tr>
                        <td>SKU</td>
                        <td>Nama Produk</td>
                        <td>Kategori</td>
                        <td>Jumlah Stok</td>
                        <td>Harga Satuan</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM produk";
                    $res = mysqli_query(connection(),$sql);
                    ?>

                    <?php while($data = mysqli_fetch_array($res)) : ?>
                        <tr>
                            <td><?php echo $data['sku'] ?></td>
                            <td><?php echo $data['nama_produk'] ?></td>
                            <td><?php echo $data['kategori'] ?></td>
                            <td><?php echo $data['jumlah_stok'] ?></td>
                            <td><?php echo $data['harga_satuan'] ?></td>
                            <td>
                                <a href="http://localhost/barokahminimarket/update.php?id=<?php echo $data['sku']?>">update</a>
                                <a href="http://localhost/barokahminimarket/delete.php?id=<?php echo $data['sku']?>">delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
        </table>
    </div>
    <div class="teks3">
        <p>====Range Harga====</p>
    </div>                   
    <div class="filter">
        <form action="filter.php" method="post">
                <table border="0px" cellpadding="5px" cellspacing="0px">
                    <tr>
                            <td>
                                <label for="min_harga">Min : </label>
                                <input type="text" name="min_harga" id="min_harga">
                            </td>

                            <td>
                                <label for="max_harga">Max : </label>
                                <input type="text" name="max_harga" id="max_harga">
                            </td>

                            <td>
                                <button type="submit" name="submitfilter">Filter</button>
                            </td>
                    </tr>
                    
                </table>
            </form>
    </div>
    
    <div class="input">
            <h2><a href="http://localhost/barokahminimarket/form.php">Input Produk</a></h2>
            <form action="searching.php" method="GET">
                    <label>Cari Produk : </label>
                    <input type="text" name="cari">
                    <input type="submit" value="Cari"><br>
                </form>
        </div>
    </body>
</html>