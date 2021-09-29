<?php
include_once "koneksi_db.php";

$now = date("Y-m-d H:i:s");

$cekTgl	= "SELECT * FROM tes WHERE waktu_expired <= '$now' AND status='belum bayar'";
$jalankanCekTgl	= mysqli_query($koneksidb, $cekTgl) or die ("Query salah");

while ($myData = mysqli_fetch_array($jalankanCekTgl)) {
	$id_target = $myData['id_transaksi'];
    //$scriptHapus 	= "DELETE FROM tes WHERE id_transaksi = '$id_target'"; //hapus data
    $scriptEdit = "UPDATE tes SET status='expired' WHERE id_transaksi = '$id_target'";
	$jalankanScript 	= mysqli_query($koneksidb, $scriptEdit) or die ("Error dalam proses ganti status");

}
echo "Selesai";
?>