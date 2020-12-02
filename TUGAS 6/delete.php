<?php
    include 'koneksi.php'; 
    $sql = "DELETE FROM sqlku WHERE jenjang_sekolah='".$_GET['jenjang_sekolah']."'";
    $res = mysqli_query($conn,$sql);
        
