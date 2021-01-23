<?php 

include('../koneksidb.php');

if(!isset($_GET['gejalaID']) ){
	
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Data Gagal Di Tambahkan');
            window.location.href='gejala_data.php';
        </script>");
}

$gejalaID = $_GET['gejalaID'];


// $sql = "SELECT * FROM data_table WHERE nim=$nim";
$query = mysqli_query($koneksi,"SELECT * FROM tbl_gejala WHERE gejalaID=$gejalaID");
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
            <form action="gejala_editProses.php" method="POST">
                <input type="text" name="gajalaID" id="gajalaID" value="<?php echo $gejala['gejalaID'] ?>">
                <label for="gajalaCode">Code Gejala</label>
                <input type="text" name="gajalaCode" id="gajalaCode" value="<?php echo $gejala['gejalaCode'] ?>">
                <label for="nama">Gejala</label>
                <textarea name="gajalaNama" id="gajalaNama" cols="30" rows="10"><?php echo $gejala['gejalaNama'] ?></textarea>
                <input type="submit" value="Submit" name="edit">
            </form>
        </div>
    </div>
</body>
</html>

