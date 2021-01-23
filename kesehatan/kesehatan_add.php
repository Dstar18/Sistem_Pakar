
<!DOCTYPE html>
<html>
    <head>
        <title>Pengisian Data Kesehatan</title>
        <link rel="stylesheet" href="../styleMhs.css">
    </head>
<body>
    <?php include('../sidebar.php');?>

    <div class="kontainer">
        <div class="judul">
            <h2>Gejala Add</h2>
        </div>
        <div class="inputdata">
            <form action="kesehatan_addProses.php" method="POST">
                <label for="">Code Kesehatan</label>
                <input type="text" name="kesehatanCode" id="kesehatanCode" >
                <label for="nama">Kesehatan</label>
                <textarea name="kesehatanKet" id="kesehatanKet" cols="30" rows="10"></textarea>
                <input type="submit" value="Submit" name="add">
            </form>
        </div>
    </div>
</body>
</html>

