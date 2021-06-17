<?php
    include 'connect.php';
    $ID_pelanggan=$_POST['ID_pelanggan'];
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $no_hp=$_POST['no_hp'];
    $status=$_POST['status'];
    $inputQuery="INSERT INTO pelanggan (ID_pelanggan, nama_pelanggan, alamat, kota, no_hp, status) VALUES ('$ID_pelanggan', '$nama_pelanggan', '$alamat', '$kota', '$no_hp', '$status')";
    $input= mysqli_query($dbconnect, $inputQuery);
    if($input==true){
        echo "<script>alert('Data berhasil ditambah');window.location='menampilkan.php';</script>";
    } else{
        echo "<script>alert('Data gagal ditambah');window.location='menampilkan.php';</script>";
    }
?>