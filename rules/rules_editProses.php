<?php

include('../koneksidb.php');


if(isset($_POST['edit'])){
	
    $rulesID = $_POST['rulesID'];
    $gejalaID = $_POST['gejalaID'];
    $kesehatanID = $_POST['kesehatanID'];

	
	
	$sql = "UPDATE tbl_rules SET rules_gejalaID='$gejalaID', rules_kesehatanID='$kesehatanID' WHERE rulesID = $rulesID";
	$query = mysqli_query($koneksi, $sql);
	
	
	if($query ) {
		
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Tambahkan');
        window.location.href='rules_data.php';
     </script>");
	} else {
		
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Gagal Di Tambahkan');
        window.location.href='rules_edit.php';
     </script>");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
