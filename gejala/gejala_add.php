
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
            <form action="gejala_addProses.php" method="POST">
                <label for="gajalaCode">Code Gejala</label>
                <input type="text" name="gajalaCode" id="gajalaCode" >
                <label for="nama">Gejala</label>
                <textarea name="gajalaNama" id="gajalaNama" cols="30" rows="10"></textarea>
                <input type="submit" value="Submit" name="add">
            </form>
        </div>
    </div>
</body>
</html>

