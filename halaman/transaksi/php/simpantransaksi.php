<?php
include('koneksi.php');

$invoice        = $_GET['invoice'];
$nama           = $_POST['nama'];
$service        = $_POST['service'];
$sukucadang     = $_POST['sukucadang'];
$diskon         = $_POST['diskon'];
$tanggal        = date("Y-m-d");
$total          = $service+$sukucadang-$diskon;
$tgl            = date("hisYmd");

$query=("UPDATE pelangganhadir SET pengambil='$nama',
                                    service=$service,
                                    sukucadang=$sukucadang,
                                    diskon=$diskon,
                                    total=$total,
                                    tglkeluar='$tanggal',
                                    status='Diambil'
        WHERE invoice='$invoice'");
$sql = mysqli_query($koneksi, $query);

echo "<script>alert('Silahkan Cetak Struk');window.location='../cetak.php?invoice=$invoice' </script>";

?>