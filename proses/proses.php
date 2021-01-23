<?php
include('../koneksidb.php');


if(isset($_POST["prosses"])){
    $for_query1 = array();
    $data = array();
    $query = array();
    $kesehatan = array();
    $for_query = '';

    if(!empty($_POST["gejala"])){
        $gejalaID = $_POST['gejala'];
        $nim = $_POST['nim'];
        $query = mysqli_query($koneksi,"SELECT * FROM ((tbl_rules 
                            INNER JOIN tbl_gejala ON tbl_rules.rules_gejalaID = tbl_gejala.gejalaID)
                            INNER JOIN tbl_kesehatan ON tbl_rules.rules_kesehatanID = tbl_kesehatan.kesehatanID)
                              WHERE rules_gejalaID IN  ('" . implode("','", $gejalaID) . "')");
        
        ?>

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

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            
            }

            .wrapper {
                padding:50px;
            display: flex;
            align-items: center;
            justify-content: center;
            }
        </style>
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
            <h2>Hasil Diagnosa Tingkat Kesehatan</h2>
        </div>
     
            <table class="center">
                <thead>
                    <th>Gejala ID</th>
                    <th>Gejala Nama</th>
                    <th>Kesehatan Code</th>
                </thead>
                
                <tbody>
                <?php while($row = mysqli_fetch_array($query)){
                   
                    echo "<tr>
                        <td>".$row['gejalaCode']."</td>
                        <td>".$row['gejalaNama']."</td>
                        <td>".$row['kesehatanCode']."</td>
                        </tr>"; 
                    $kesehatan[] = $row['rules_kesehatanID'];
                }?>
                
                </tbody>
            </table>
            
            <div style=" text-align: center;">
                <?php
                    $xdata = array_filter(array_count_values($kesehatan));
                    asort($xdata, SORT_NUMERIC);
                    foreach( $xdata as $k => $v ){
                        $key =  $k;      
                    }
                    $queryxx = mysqli_query($koneksi,"SELECT * FROM tbl_kesehatan WHERE kesehatanID = $key");
                    while($row1 = mysqli_fetch_assoc($queryxx)){
                        echo "<div> <h2>Hasil Diagnosa = ". $row1['kesehatanKet']."</h2></div>";
                        $kesID = $row1['kesehatanID'];
                    }
                ?>
        </div>
            
        <br>
        <table class="center">
                <thead>
                    <th>Kode Kesehatan</th>
                    <th>Nama Kesehatan</th>
                    <th>Saran</th>
                </thead>
                
                <tbody>
                <tr>
                    <td>KES001</td>
                    <td>Tingkat Kesehatan Baik</td>
                    <td>Tetap menjaga kesehatan dan diizinkan untuk mengikuti kuliah tatap muka</td>
                </tr>
                <tr>
                    <td>KES002</td>
                    <td>Tingkat Kesehatan Kurang Baik</td>
                    <td>Periksa ke klinik atau dokter dan diberi waktu untuk istarahat dan hanya dapat mengikuti kuliah
                    secara online sampai keadaan membaik</td>
                </tr>
                <tr>
                    <td>KES003</td>
                    <td>Tingkat Kesehatan Buruk</td>
                    <td>Dirujuk kerumah sakit untuk diberi penanganan dan diberi waktu istirahat
                    tidak diizinkan untuk mengikuti perkuliahan online maupun tatap  muka</td>
                </tr>

                </tbody>
                </table>


      
    </div>
</body>
</html>

<?php  


$chk="";  
        foreach($gejalaID as $chk1){  
            $chk .= $chk1.",";  
        }  
        $sql = "INSERT INTO tb_hasil (hasil_mhsID, hasil_gejalaID, hasil_kesehatanID) VALUE ('$nim','$chk','$kesID')";
        $query1 = mysqli_query($koneksi, $sql);



} }?>

