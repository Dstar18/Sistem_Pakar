<?php

include('../koneksidb.php');

if( isset($_GET['nim']) ){
	
	
	$nim = $_GET['nim'];
	
	
	$sql = "DELETE FROM tbl_mhs WHERE nim=$nim";
	$query = mysqli_query($koneksi, $sql);
	
	
	if( $query ){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Hapus');
        window.location.href='kesehatan_data.php';
     </script>");
	} else {
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Tidak Bisa Di Hapus');
        window.location.href='kesehatan_data.php';
     </script>");
	}
	
} else {
	die("akses dilarang...");
}



?>