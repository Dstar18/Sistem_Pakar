<?php

include('../koneksidb.php');

if( isset($_GET['gejalaID']) ){
	
	
	$delete = $_GET['gejalaID'];
	
	
	$sql = "DELETE FROM tbl_gejala WHERE gejalaID=$delete";
	$query = mysqli_query($koneksi, $sql);
	
	
	if( $query ){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Hapus');
        window.location.href='gejala_data.php';
     </script>");
	} else {
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Tidak Bisa Di Hapus');
        window.location.href='gejala_data.php';
     </script>");
	}
	
} else {
	die("akses dilarang...");
}



?>