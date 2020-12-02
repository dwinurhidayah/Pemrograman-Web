<?php
    include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="teks8">
            <?php
            $sql = "SELECT * FROM sqlku";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $link_delete = "<a class='hapusData' href= 'delete.php?jenjang_sekolah=".$row['jenjang_sekolah']."'>
                    Delete</a>";
                    echo $row['jenjang_sekolah']."&emsp;&emsp;".$row['nama_sekolah'] ."  $link_delete<br/>";
                }
            }?>
        </div>
    </body>
    

     
