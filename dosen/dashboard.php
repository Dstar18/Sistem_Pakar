
<!DOCTYPE html>
<html>
    <head>
        <title>Pengisian data diri</title>
        <link rel="stylesheet" href="../styleMhs.css">
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table.center {
            margin-left: auto; 
            margin-right: auto;
        }
        </style>
    </head>
<body>
<?php include('../sidebar.php');?>

    <div class="kontainer">
        <div class="inputdata">
        <div class="judul">
            <center>
            <h3>Sistem Pakar Diagnosa Tingkat Kesehatan Mahasiswa STTA
                Menggunakan Metode Forward Chaining Berbasis WEB</h3>
                </center>
            <div class="halo">
            <p>
            Terjadinya pandemi COVID-19 mahasiswa diharuskan menjaga kesehatan dan
mematuhi protokol yang ada sebelum dan saat akan perkuliahan tatap muka kembali dibuka. Dengan adanya aplikasi ini akan memudahkan mahasiswa untuk mengecek kondisi kesehatannya, dan pihak kampus dapat mengetahui kondisi kesehatan mahaiswanya sehingga dapat membantu mahasiswa yang memiliki kesehatan kurangbaik atau buruk langsung diberi tindakan cepat.
            
            </p>
            </div>

            <p>
                <b>Terdapat tiga hasil diagnosa :</b><br>
                <table class="center">
                <thead>
                    <th>No</th>
                    <th>Nama Kesehatan</th>
                    <th>Saran</th>
                </thead>
                
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Tingkat Kesehatan Baik</td>
                    <td>Tetap menjaga kesehatan dan diizinkan untuk mengikuti kuliah tatap muka</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tingkat Kesehatan Kurang Baik</td>
                    <td>Periksa ke klinik atau dokter dan diberi waktu untuk istarahat dan hanya dapat mengikuti kuliah
                    secara online sampai keadaan membaik</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tingkat Kesehatan Buruk</td>
                    <td>Dirujuk kerumah sakit untuk diberi penanganan dan diberi waktu istirahat
                    tidak diizinkan untuk mengikuti perkuliahan online maupun tatap  muka</td>
                </tr>

                </tbody>
                </table>
            </p>
        </div>
        </div>
    </div>
</body>
</html>

