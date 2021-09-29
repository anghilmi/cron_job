<?php
# konek ke server lokal
$myHost = "localhost";
$myUser = "root";
$myPass = "";
$myDbs  = "db_cron";

# konek ke web server lokal
$koneksidb = mysqli_connect($myHost, $myUser, $myPass) or die ("koneksi gagal ");

# memilih database
mysqli_select_db($koneksidb, $myDbs) or die ("database tidak ditemukan ");
?>