<?php

include('../koneksidb.php');

if( isset($_GET['rulesID']) ){
	
	
	$rulesID = $_GET['rulesID'];
	
	
	$sql = "DELETE FROM tbl_rules WHERE rulesID=$rulesID";
	$query = mysqli_query($koneksi, $sql);
	
	
	if( $query ){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Hapus');
        window.location.href='rules_data.php';
     </script>");
	} else {
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Tidak Bisa Di Hapus');
        window.location.href='rules_data.php';
     </script>");
	}
	
} else {
	die("akses dilarang...");
}



?>