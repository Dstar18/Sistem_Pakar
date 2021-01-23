<?php include('../koneksidb.php');?>

<?php
// $sql = "SELECT * FROM tbl_gejala";
// $query = mysqli_query($koneksi, $sql);

if(!isset($_GET['nim']) ){
	
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Data Gagal Di Tambahkan');
            window.location.href='kesehatan_data.php';
        </script>");
}

$nim = $_GET['nim'];


// $sql = "SELECT * FROM data_table WHERE nim=$nim";
$queryMhs = mysqli_query($koneksi,"SELECT * FROM tbl_mhs WHERE nim = '$nim'");
$mhs = mysqli_fetch_assoc($queryMhs);

$query = mysqli_query($koneksi,"SELECT * FROM tbl_gejala");

// var_dump($query);
// print_r($row);


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pengisian data diri</title>
        <link rel="stylesheet" href="../styleMhs.css">
    </head>
<body>
    <div class="navbar1">
        <ul>
            <li><a href="#">Diagnosa Tingkat Kesehatan</a></li>
            <li style="float:right"><a href="../index.php">Keluar</a></li>
        </ul>
    </div>

    <div class="kontainer">
        <div class="judul">
            <h2>Pilih Gejala yang Dialami</h2>
        </div>
        <div class="halo">
            <p>
                Halo 
                <b><?php echo $mhs['nama'];?></b> <br>
                silahkan pilih dengan jujur apabila anda mengalami gejala penyakit dibawah ini,
                jika tidak mengalami gejala, pilih Tidak Mengalami Gejala Apapun 
            </p>
        </div>
        
        <form action="proses.php" method="POST">
        <input type="hidden" name="nim" value="<?php echo $mhs['nim'];?>">
        <div class="inputgjl">
            <br><br>

                <?php while($row = mysqli_fetch_assoc($query)){ 
                        echo "<input type='checkbox' name='gejala[]' value='".$row['gejalaID']."'><label for='batukrgn'>".$row['gejalaNama']."</label><br>";
                }?>
            
        </div>

            <br><br>
            <div class="save">
            <input type="submit" value="prosses" name="prosses">
            </div>

        </form>
        
    </div>
</body>
</html>