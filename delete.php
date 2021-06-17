<?php
    include 'connect.php';
    $ID_pelanggan=$_GET['ID_pelanggan'];
    $deleteQuery="DELETE FROM pelanggan WHERE ID_pelanggan='$ID_pelanggan'";
    $delete=mysqli_query($dbconnect, $deleteQuery);
    if($delete==true){
        echo "<script>alert('Data berhasil dihapus');window.location='menampilkan.php';</script>";
    } else{
        echo "<script>alert('Data gagal dihapus');window.location='menampilkan.php';</script>";
    }
?>