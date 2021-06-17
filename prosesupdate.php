<?php
    session_start();
    include 'connect.php';
    $ID_pelanggan=$_POST['ID_pelanggan'];
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $no_hp=$_POST['no_hp'];
    $status=$_POST['status'];
    $updateQuery="UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', kota='$kota', no_hp='$no_hp', status='$status' WHERE ID_pelanggan='$ID_pelanggan'";
    $update=mysqli_query($dbconnect, $updateQuery);
    if($update==true){
        echo "<script>alert('Data berhasil diubah');window.location='menampilkan.php';</script>";
    } else{
        echo "<script>alert('Data gagal diubah');window.location='menampilkan.php';</script>";
    }
?>