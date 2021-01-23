<?php 

include('../koneksidb.php');



$hasilID = $_GET['hasilID'];

// $sql = "SELECT * FROM data_table WHERE nim=$nim";
$query = mysqli_query($koneksi,"SELECT * FROM ((tb_hasil 
                        INNER JOIN tbl_kesehatan ON tb_hasil.hasil_kesehatanID = tbl_kesehatan.kesehatanID)
                        INNER JOIN tbl_mhs ON tb_hasil.hasil_mhsID = tbl_mhs.nim)
                        WHERE hasilID = $hasilID");


// $query = mysqli_query($db, $sql);
$hasilDetail = mysqli_fetch_assoc($query);



if(mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pengisian data diri</title>
        <link rel="stylesheet" href="../styleMhs.css">
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
            }
            th{
                width: 20%;
            }
            tr{
                width: 80%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
            }

            #customers tr{background-color: white;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding: 16px;
                text-align: left;
            }
            #customers td {
                padding: 16px;
            }

            table.center {
                margin-left: auto;
                margin-right: auto;
            }

            .button-add {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                /* float:left; */
            }
        </style>
    </head>
<body>
    

    <?php include('../sidebar.php');?>

<div style="margin-top:30px">
    <!-- <div style="width: 90%; margin-top:20px; text-align:center;"> -->
    
        <table id="customers" style="" class="center">
            <thead>
       
            </thead>
            <tbody>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <td><?php echo $hasilDetail['nama']?></td>
                </tr>
                <tr>
                    <th>Gejala</th>
                    <td>
                    <?php 
                        $gejalaID = $hasilDetail['hasil_gejalaID'];
                        $arr1 = preg_replace('/[^A-Za-z0-9\ ]/', '', $gejalaID);
                        $arr2 = str_split($arr1);
                        $userStr = implode("', '", $arr2);
                        $query1 = mysqli_query($koneksi,"SELECT * FROM tbl_gejala WHERE gejalaID IN  ('$userStr')");
                        while($row = mysqli_fetch_array($query1)){
                            echo "<li>".$row['gejalaNama']."</li>"; 
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <th>Status Kesehatan</th>
                    <td><?php echo $hasilDetail['kesehatanKet']?></td>
                </tr>
            </tbody>
        </table>
    <!-- </div> -->

    </div>
</body>
</html>
