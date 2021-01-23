<?php
$koneksi = mysqli_connect('localhost','admin','admin','db_spakar');
if(!$koneksi){
    die("Gagal terhubung dengan database. . . ".mysqli_connect_error());
}
?>