<?php
include '../transaksi/php/koneksi.php';
// menyimpan data kedalam variabel
$id       = $_GET['id'];
$teknisi  = $_GET['teknisi'];
$status   = $_POST['status'];
// query SQL untuk insert data
$query="UPDATE pelangganhadir SET status='$status' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php?teknisi=$teknisi");
?>
