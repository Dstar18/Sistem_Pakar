<?php 

include('../koneksidb.php');

if(!isset($_GET['rulesID']) ){
	
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Data Gagal Di Tambahkan');
            window.location.href='gejala_data.php';
        </script>");
}

$rulesID = $_GET['rulesID'];


// $sql = "SELECT * FROM data_table WHERE nim=$nim";
$query = mysqli_query($koneksi,"SELECT * FROM tbl_rules WHERE rulesID=$rulesID");
// $query = mysqli_query($db, $sql);
$rules = mysqli_fetch_assoc($query);


$gejala    = mysqli_query($koneksi,"SELECT * FROM tbl_gejala");
$kesehatan = mysqli_query($koneksi,"SELECT * FROM tbl_kesehatan");

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
            <form action="rules_editProses.php" method="POST">
                <input type="text" name="rulesID" id="rulesID" value="<?php echo $rules['rulesID'] ?>">
                <select name="gejalaID" id="">
                    <?php
                        $i = 1;
                        while($row1 = mysqli_fetch_assoc($gejala)){ 
                            if($row1['gejalaID'] == $rules['rules_gejalaID']){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                            $output = '<option value="'.$row1['gejalaID'].'" '.$selected.'>'.$row1['gejalaCode'].'</option>';
                            echo $output; 
                        }

                    ?>
                </select>

                <select name="kesehatanID" id="">
                    <?php
                        $i = 1;
                        while($row2 = mysqli_fetch_assoc($kesehatan)){ 
                            if($row2['kesehatanID'] == $rules['rules_kesehatanID']){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                            $output = '<option value="'.$row2['kesehatanID'].'" '.$selected.'>'.$row2['kesehatanCode'].'</option>';
                            echo $output; 
                        }
                    ?>
                </select>

                <input type="submit" value="Submit" name="edit">
            </form>
        </div>
    </div>
</body>
</html>

