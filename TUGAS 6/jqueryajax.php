<?php
    include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="sub">
            <form action="simpan.php" method="POST">
                <select name="jenjang_sekolah">
					<option selected disabled> -----Jenjang Sekolah-----</option>
                   	<option value="SD">SD</option>
               		<option value="SMP">SMP</option>
					<option value="SMA">SMA</option>
					<option value="S1">S1</option>
					<option value="S2">S2</option>
					<option value="S3">S3</option>				
				</select>
                <input type="text" name="nama_sekolah" placeholder="Nama Sekolah Anda.."/>
                <input type="submit" name="submit" value="submit"/>
            </form>
        </div>
    </body>
</html>
