<?php
    include('../koneksidb.php');
    $query = mysqli_query($koneksi,"SELECT * FROM tbl_kesehatan");
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
            width: 80%;
            }

            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
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
    <div style="text-align:center; margin-top:20px">
        <a href="kesehatan_add.php"><button class="button-add">Tambah</button></a>
    </div>
    <!-- <div style="width: 90%; margin-top:20px; text-align:center;"> -->
        <table id="customers" style="; margin-top:20px;" class="center">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>Code Kesehatan</th>
                    <th>Nama Kesehatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($query)){ 
                echo "<tr>
                        <td>".$i++."</td>
                        <td>".$row['kesehatanCode']."</td>
                        <td>".$row['kesehatanKet']."</td>
                        <td>
                            <div>
                                <a href='kesehatan_edit.php?kesehatanID=".$row['kesehatanID']."'>Edit</a>
                                <a href='kesehatan_delete.php?kesehatanID=".$row['kesehatanID']."'>Delete</a>
                            </div>
                        </td>
                    </tr>";
            }?>
            
          
               
                 
            </tbody>
        </table>
    <!-- </div> -->
</body>
</html>

