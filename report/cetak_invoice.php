<?php
include('../halaman/transaksi/php/koneksi.php');	
	$invoice=$_GET['invoice'];
  $query = mysqli_query($koneksi,"select * from pelangganhadir WHERE invoice='$invoice'")or die(mysql_error);
  $data=mysqli_fetch_array($query);
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Nota <?php echo $data['invoice']; ?></title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body bgcolor="grey" onload="window.print();" > 
  <!-- onload="window.print();" -->
    <div class="container">
      <div class="vertical">
        <div class="headerkanan">
          <img src="../img/download.jpg" width="250"/>
          <br><font size="-1">No.Invoice : <?php echo $data['invoice']; ?></font>
        </div>
        <div class="headerkiri">
          <div class="request">
            SERVICE REQUEST
          </div>
          <div class="alamat">
            <span><i class="fa fa-square"></i> Punggawan 0271 - 788 1957, 08510 2828 490</span><br>
            <span><i class="fa fa-square"></i> Jebres 0851 0051 2541</span><br>
            <span><i class="fa fa-square"></i> Kleco 0851 0298 8990</span><br>
            <span><i class="fa fa-square"></i> Manahan 0851 0307 1696</span><br>
            <span><i class="fa fa-square"></i> Sukoharjo 0851 0288 1011</span><br>
            <span><i class="fa fa-square"></i> Mojokerto 0851 0298 8990</span>
          </div>
        </div>
      </div> 
      <hr>
      <div class="konten">
        <div class="kotakhitam">
          Customer  
        </div>

        <div class="kotakputih">
          <div class="kanan">
            Nama
          </div>
          <div class="Kiri">
            : <?php echo $data['nama'] ?>
          </div>  
        </div>

        <div class="kotakputih">
          <div class="kanan">
            No. Telp
          </div>
          <div class="Kiri">
            : <?php echo $data['no_hp'] ?>
          </div>  
        </div>

        <div class="kotakputih" style="border-bottom:solid 2px black">
          <div class="kanan">
            Alamat
          </div>
          <div class="Kiri">
            : <?php echo $data['alamat'] ?>
          </div>  
        </div>

      </div> 
      <hr>
      <div class="konten">
        <div class="kotakhitam">
          Product
        </div>
        <div class="kotakputih">
          <table border="2" width="100%">
            <tr align="center">
              <td><b>Type</b></td>
              <td><b>No Serial</b></td>
              <td><b>Garansi</b></td>
              <td><b>Keteranan</b></td>
            </tr>
            <tr align="center">
              <td><?php echo $data['barang']; ?></td>
              <td><?php echo $data['invoice']; ?></td>
              <td><input type="checkbox"> <i>Ya <input type="checkbox">Tidak</i></td>
              <td><?php echo $data['status']; ?></td>
          </table>
        </div>
        <div class="kotakputih">
          <div class="kanan">
            Kerusakan
          </div>
          <div class="kanan">
            : <?php echo $data['keterangan'] ?>
          </div>
        </div>
        <div class="kotakputih">
          <div class="kanan">
            Perbaikan
          </div>
          <div class="kanan">
            :
          </div>
        </div>
        <div class="kotakputih">
          <div class="kanan">
            Teknisi
          </div>
          <div class="kanan">
            : <?php echo $data['teknisi'] ?>
          </div>
        </div>
        <div class="kotakputih">
          <div class="kanan">
            Status
          </div>
          <div class="kiri">
            : <i><input type="checkbox"> Ya <input type="checkbox"> Tidak </i>
          </div>
        </div>
        <div class="kotakputih">
          <div class="kanan">
            Alasan
          </div>
          <div class="kiri">
            : 
          </div>
        </div>
        <div class="kotakputih">
          <div class="kanan">
            <br>
          </div>
          <div class="kiri">
            
          </div>
        </div>
        <div class="kotakputih" style="border-bottom:solid 2px black">
          <div class="kanan">
            Suku Cadang
          </div>
          <div class="kiri">
            : 
          </div>
        </div>
      </div>
      <hr>
      <div class="konten">
        <div class="kotakhitam">
          Biaya
        </div>
        <div class="jasa" style="border-left: solid 2px;">
          Jasa service
        </div>
        <div class="jasa">
          Suku Cadang
        </div>
        <div class="jasa">
          Diskon  
        </div>
        <div class="jasa" style="border-right: solid 2px; width:26.5%">
          Total
        </div>
        <div class="jasa" style="border-left: solid 2px;border-bottom:2px solid">
          <h2>-</h2>
        </div>
        <div class="jasa" style="border-bottom:2px solid">
          <h2>-</h2>
        </div>
        <div class="jasa" style="border-bottom:2px solid">
        <h2>-</h2>  
        </div>
        <div class="jasa" style="border-right: solid 2px; width:26.5%;border-bottom:2px solid">
        <h2>-</h2>
        </div> 
      </div>
      <hr>
      <div class="konten">
        <div class="jasa" style="border-left: solid 2px; border-top:2px solid;">
          Tgl. Masuk
        </div>
        <div class="jasa" style="border-top:2px solid;">
          Dealer
        </div>
        <div class="jasa" style="border-top:2px solid;">
          Teknisi  
        </div>
        <div class="jasa" style="border-right: solid 2px; width:26.5%; border-top:2px solid;">
          Pengambilan
        </div>
        <div class="jasa" style="border-left: solid 2px;border-bottom:2px solid">
          <h2>-</h2>
        </div>
        <div class="jasa" style="border-bottom:2px solid">
          <h2>-</h2>
        </div>
        <div class="jasa" style="border-bottom:2px solid">
        <h2>-</h2>  
        </div>
        <div class="jasa" style="border-right: solid 2px; width:26.5%;border-bottom:2px solid">
        <h2>-</h2>
        </div> 
      </div>
      <hr>
      <div class="konten">
        <table border="0">
          <tr>
            <td style="width:80%;" valign="top"><b>Catatan :</b></td>
            <td><p align="center">
              <?php
 
 //KODE PANGGIL LIBRARY
 include "phpqrcode/qrlib.php";
  
 //KODE MEMBUAT QRCODE
  $nama = $data['nama'];
  $almt = $data['alamat'];
  $hp = $data['no_hp'];
  $isi = "Informasi servis | Nama : ".$data['nama']." Alamat | :".$data['alamat']." Status : " .$data['status'];
     Qrcode::png("$isi","image".$data['invoice'].".png","L",4,5); 
      
     //KODE MEMANGGIL GAMBAR YANG DIBUAT
     echo "<img src='image".$data['invoice'].".png'>";

     echo "<font size=-2><i>Scan QRcode untuk  detail</i></font>"; 
 ?>
            </p></td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>