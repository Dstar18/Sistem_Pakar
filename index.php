<html>
    <head>
        <title>Silahkan Masuk</title>
    <link rel="stylesheet" href="stylein.css" type="text/css">
    </head>
<body>
    <h2>SILAHKAN MASUK</h2>
    <form action="" method="">
        <div class="imgcontainer">
            <img src="Logo.jpeg" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <button type="submit" formaction="mahasiswa/mhs_add.php">MAHASISWA</button>
                <p><center>atau</center></p>
            <button type="submit" formaction="login.php">DOSEN</button>
        </div> 
        <div class="container" style="background-color:#f1f1f1">
        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Booking Ruangan baru berhasil!";
            } else {
                echo "Booking gagal!";
            }
        ?>
    </p>
<?php endif; ?>
        </div>
    </form>


</body>
</html>