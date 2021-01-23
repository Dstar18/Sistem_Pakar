<?php

include('../koneksidb.php');


if(isset($_POST['edit'])){
	
    $gejalaID = $_POST['gajalaID'];
    $gejalaCode = $_POST['gajalaCode'];
    $gejalaNama = $_POST['gajalaNama'];

	
	
	$sql = "UPDATE tbl_gejala SET gejalaCode='$gejalaCode', gejalaNama='$gejalaNama' WHERE gejalaID=$gejalaID";
	$query = mysqli_query($koneksi, $sql);
	
	
	if($query ) {
		
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Tambahkan');
        window.location.href='gejala_data.php';
     </script>");
	} else {
		
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Gagal Di Tambahkan');
        window.location.href='gejala_edit.php';
     </script>");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
