<?php
include('../koneksidb.php');

if(isset($_POST['add'])){
    
    $kesehatanCode = $_POST['kesehatanCode'];
    $kesehatanKet = $_POST['kesehatanKet'];

    $sql = "INSERT INTO tbl_kesehatan (kesehatanCode, kesehatanKet) VALUE ('$kesehatanCode', '$kesehatanKet')";
	$query = mysqli_query($koneksi, $sql);
		
	if($query) {
      
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Tambahkan');
        window.location.href='kesehatan_data.php';
     </script>");
	} else {
	
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Gagal Di Tambahkan');
        window.location.href='kesehatan_add.php';
     </script>");
	}



}





?>