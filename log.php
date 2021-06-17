<?php
    session_start();
    include "connect.php";
    $idUser=$_POST['id_pengguna'];
    $pass=$_POST['pass'];
    if($_GET['op']=="in")
    {
        $userDataQuery="SELECT * FROM user WHERE id_pengguna='$idUser' AND pass='$pass'";
        $userData=mysqli_query($dbconnect, $userDataQuery);
        if(mysqli_num_rows($userData)==1)
        {
            $d=mysqli_fetch_array($userData);
            $_SESSION['id_pengguna']= $d['id_pengguna'];
            $_SESSION['pass']= $d['pass'];
            if ($d['divisi']=="Penjualan"){
                header("location:menampilkan.php");
            } else{
                header("location:selain.php");
            }
        } else{
            die("ID atau Pass Salah, <a href='login.php'>klik disini untuk login kembali</a>");
        }
    } else if($_GET['op']=="out"){
        unset($_SESSION['id_pengguna']);
        unset($_SESSION['pass']);
        header("location:login.php");
    } 
?>