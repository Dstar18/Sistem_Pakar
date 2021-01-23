<?php include ("../koneksidb.php");
    if(isset($_POST['submit']))
    {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jeniskel = $_POST['jeniskel'];
        $prodi = $_POST['prodi'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO tbl_mhs (nim, nama, jeniskel, prodi, alamat) VALUE ('$nim','$nama','$jeniskel','$prodi','$alamat')";
        $query = mysqli_query($koneksi, $sql);

        //Mengalihkan ke halaman ingjl.php
        if($query){
            $queryMhs = mysqli_query($koneksi,"SELECT * FROM tbl_mhs WHERE nim = '$nim'");
            $mhs = mysqli_fetch_assoc($queryMhs);

            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Data Berhasil');
            window.location.href='../proses/gejala.php?nim=".$mhs['nim']."';
         </script>");
        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Data Gagal');
            window.location.href='index.php';
         </script>");
        }
        
    }
?>

