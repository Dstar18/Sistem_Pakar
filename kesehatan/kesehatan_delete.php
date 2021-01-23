<?php

include('../koneksidb.php');

if( isset($_GET['kesehatanID']) ){
	
	
	$kesehatanID = $_GET['kesehatanID'];
	
	
	$sql = "DELETE FROM tbl_kesehatan WHERE kesehatanID=$kesehatanID";
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