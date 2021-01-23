
<?php
    include('../koneksidb.php');
    $gejala    = mysqli_query($koneksi,"SELECT * FROM tbl_gejala");
    $kesehatan = mysqli_query($koneksi,"SELECT * FROM tbl_kesehatan");
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
            <form action="rules_addProses.php" method="POST">
                <select name="gejalaID" id="">
                <?php
                    $i = 1;
                    while($row1 = mysqli_fetch_assoc($gejala)){ 
                        echo " <option value='".$row1['gejalaID']."'>".$row1['gejalaCode']."</option>";
                    }
                ?>
                
                </select>
                <select name="kesehatanID" id="">
                <?php
                    $i = 1;
                    while($row2 = mysqli_fetch_assoc($kesehatan)){ 
                        echo " <option value='".$row2['kesehatanID']."'>".$row2['kesehatanCode']."</option>";
                    }
                ?>
                </select>
                <input type="submit" value="Submit" name="add">
            </form>
        </div>
    </div>
</body>
</html>

