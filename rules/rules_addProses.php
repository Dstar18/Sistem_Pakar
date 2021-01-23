<?php
include('../koneksidb.php');

if(isset($_POST['add'])){
    
    $gejalaID = $_POST['gejalaID'];
    $kesehatanID = $_POST['kesehatanID'];

    $sql = "INSERT INTO tbl_rules (rules_gejalaID, rules_kesehatanID) VALUE ('$gejalaID', '$kesehatanID')";
	$query = mysqli_query($koneksi, $sql);
		
	if($query) {
      
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil Di Tambahkan');
        window.location.href='rules_data.php';
     </script>");
	} else {
	
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Gagal Di Tambahkan');
        window.location.href='rules_add.php';
     </script>");
	}



}





?>