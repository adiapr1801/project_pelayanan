<?php
include('koneksi.php');


$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$barang=$_POST['barang'];
$keluhan=$_POST['keluhan'];
$teknisi=$_POST['teknisi'];
$biaya=$_POST['biaya'];
$tanggal = date("d-m-Y");
$tgl=date("hisYmd");

$query=("INSERT INTO pelangganhadir (nama,alamat,no_hp,barang,keterangan,teknisi,biaya,tanggal,status,invoice,tglkeluar,service,sukucadang,diskon,total,pengambil)
VALUE ('$nama','$alamat','$nohp','$barang','$keluhan','$teknisi','10000','$tanggal','Dalam Antrean','$tgl','',0,0,0,0,'')");
$sql = mysqli_query($koneksi, $query);


header("location:../index.php");

?>