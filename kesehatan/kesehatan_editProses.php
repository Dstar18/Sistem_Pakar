<?php

include('../koneksidb.php');


if(isset($_POST['edit'])){
	
    $kesehatanID = $_POST['kesehatanID'];
    $kesehatanCode = $_POST['kesehatanCode'];
    $kesehatanKet = $_POST['kesehatanKet'];

	
	
	$sql = "UPDATE tbl_kesehatan SET kesehatanCode='$kesehatanCode', kesehatanKet='$kesehatanKet' WHERE kesehatanID=$kesehatanID";
	$query = mysqli_query($koneksi, $sql);
	
	
	if($query ) {
		
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Tambahkan');
        window.location.href='kesehatan_data.php';
     </script>");
	} else {
		
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Gagal Di Tambahkan');
        window.location.href='kesehatan_edit.php';
     </script>");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
