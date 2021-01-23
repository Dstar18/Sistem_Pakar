<?php
include('../koneksidb.php');

if(isset($_POST['add'])){
    
    $gejalaCode = $_POST['gajalaCode'];
    $gejalaNama = $_POST['gajalaNama'];

    $sql = "INSERT INTO tbl_gejala (gejalaCode, gejalaNama) VALUE ('$gejalaCode', '$gejalaNama')";
	$query = mysqli_query($koneksi, $sql);
		
	if($query) {
      
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Tambahkan');
        window.location.href='gejala_data.php';
     </script>");
	} else {
	
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Gagal Di Tambahkan');
        window.location.href='gejala_add.php';
     </script>");
	}



}





?>