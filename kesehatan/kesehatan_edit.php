<?php 

include('../koneksidb.php');

if(!isset($_GET['kesehatanID']) ){
	
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Data Gagal Di Tambahkan');
            window.location.href='kesehatan_data.php';
        </script>");
}

$kesehatanID = $_GET['kesehatanID'];


// $sql = "SELECT * FROM data_table WHERE nim=$nim";
$query = mysqli_query($koneksi,"SELECT * FROM tbl_kesehatan WHERE kesehatanID = $kesehatanID");
// $query = mysqli_query($db, $sql);
$gejala = mysqli_fetch_assoc($query);



if(mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Pengisian data diri</title>
        <link rel="stylesheet" href="../styleMhs.css">
    </head>
<body>
<?php include('../sidebar.php');?>

    <div class="kontainer">
        <div class="judul">
            <h2>Gejala Add</h2>
        </div>
        <div class="inputdata">
            <form action="kesehatan_editProses.php" method="POST">
                <input type="text" name="kesehatanID" id="kesehatanID" value="<?php echo $gejala['kesehatanID'] ?>">
                <label for="gajalaCode">Code Gejala</label>
                <input type="text" name="kesehatanCode" id="kesehatanCode" value="<?php echo $gejala['kesehatanCode'] ?>">
                <label for="nama">Gejala</label>
                <textarea name="kesehatanKet" id="kesehatanKet" cols="30" rows="10"><?php echo $gejala['kesehatanKet'] ?></textarea>
                <input type="submit" value="Submit" name="edit">
            </form>
        </div>
    </div>
</body>
</html>

