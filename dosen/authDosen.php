<?php
include('../koneksidb.php');


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM tb_dosen WHERE 'dosenUsername' = $username &&  'dosenUsername' = $password";


    $data = mysqli_query($koneksi, "SELECT * FROM tb_dosen WHERE dosenUsername='$username' AND dosenUsername='$password'");
    $cek = mysqli_num_rows($data);
    // $query = mysqli_query($koneksi, $sql);

    if($cek > 0){
        // echo "login";
        // header("location:dashboard.php");
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Login Success');
          window.location.href='dashboard.php';
       </script>");
    }
    else{
        // echo "gagal";
        // echo "<script>alert('Gagal Login');</script>";
        // echo "<script>window.location='".redirect('../login.php')."';</script>";
        // echo "<script>alert('Gagal Login'); window.location = './login.php'';</script>";
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Gagal Login');
          window.location.href='../login.php';
       </script>");
        // header("location:../login.php");

        // echo "<script>alert('Your message Here');</script>"; 
        // echo "<script>window.location='".site_url('login.php')."';</script>";
    }
    
}





?>