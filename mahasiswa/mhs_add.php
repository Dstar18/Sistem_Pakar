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
            <h2>Form Pengisian Data Diri</h2>
        </div>
        <div class="inputdata">
        <form action="mhs_addProses.php" method="POST">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" required>
            <label for="jeniskel">Jenis Kelamin</label>
            <select name="jeniskel" id="jeniskel">
                <option disabled selected>--Pilih--</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select>
            <label for="prodi">Prodi</label>
            <select name="prodi" id="prodi">
                <option disabled selected>--Pilih--</option>
                <option>D3 Aeronautika</option>
                <option>Teknik Elektro</option>
                <option>Teknik Dirgantara</option>
                <option>Informatika</option>
                <option>Teknik Mesin</option>
                <option>Teknik Industri</option>
            </select>
            <label for="alamat">Alamat Jogja</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <input type="submit" value="Submit" name="submit">
        </form>
        </div>
    </div>
</body>
</html>

