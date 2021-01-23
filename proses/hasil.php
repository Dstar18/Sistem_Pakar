<!DOCTYPE html>
<html>
    <head>
        <title>Hasil gejala dialami</title>
        <link rel="stylesheet" href="#">
    </head>
<body>
    <div class="navbar1">
        <ul>
            <li><a href="#">Diagnosa Tingkat Kesehatan</a></li>
            <li style="float:right"><a href="index.php">Keluar</a></li>
        </ul>
    </div>

    <div class="kontainer">
        <div class="judul">
            <h2>Hasil Gejala Yang Anda Alami</h2>
        </div>
        <div class="hidentitas">
            <?php
            $sql = "SELECT * FROM tbl_mhs";
            $query = mysqli_query($koneksi, $sql);

            while($mhs = mysqli_fetch_array($query))
            {
                echo "<br>";
                echo "<p>".$mhs['nim']."</p>";
                
            }
            ?>
        </div>
    </div>
</body>
</html>