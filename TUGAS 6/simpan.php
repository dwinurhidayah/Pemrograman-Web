<?php

include 'koneksi.php'; 

if(isset($_POST['jenjang_sekolah'])){
    $jenjang_sekolah = $_POST['jenjang_sekolah'];
    $nama_sekolah = $_POST['nama_sekolah'];
    $sql = "INSERT INTO sqlku VALUES ('$jenjang_sekolah', '$nama_sekolah')";
    if(mysqli_query($conn,$sql)){
        echo "Berhasil Memasukkan Data";
    } else {
        echo "Error Memasukkan Data <br/>".mysqli_error($conn);
    }
}