<?php 
include "../../model/m_transaksi.php";
$transaksi= new Transaksi($connection);
 ?>

<?php 
$tampil= $transaksi->tampil(@$_GET['invoice']);
while($data = $tampil->fetch_object()){
?>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
</style>

 <section class="content">
 <div class="container" style="width:21cm; margin:auto; background:#FFFFFF;padding:10px;">
 	<table width="100%" border="0">
  <tr>
    <td width="54%"><img src="download.jpg" height="100" />
	<br /><br />
	No invoice : <?=$data->invoice; ?>
	</td>
    <td width="46%" valign="top"><div style="border:solid 2px;padding:5px; font-weight:bolder; text-align:center; margin-bottom:10px;">SERVICE REQUEST</div>      
	<font size="-2">
	<i class="fa fa-square"></i> Punggawan 0271 - 788 1957, 08510 2828 490, 0851 188 3330<br />
	<i class="fa fa-square"></i> Jebres 0851 0051 2541</br>
	<i class="fa fa-square"></i> Kleco 0851 0298 8890</br>
	<i class="fa fa-square"></i> Manahan 0851 0307 1795 </br>
	<i class="fa fa-square"></i> Sukoharjo 0851 077 1011</br>
	</font>
	</td>
  </tr>
</table>
<hr color="#000000" style="height:5px;" />

<table width="100%" border="1" style="padding-left:10px;">
  <tr>
    <td bgcolor="#000000"> <span class="style1" style="padding:20px;">Customer </span></td>
    </tr>
  <tr>
    <td bordercolor="#CCCCCC"><div align="center">
      <table width="95%" border="0">
          <tr>
            <td width="19%">Nama</td>
            <td width="81%"> : <?=$data->nama_pemilik; ?></td>
          </tr>
          </table>
    </div></td>
    </tr>
  <tr>
    <td><div align="center">
      <table width="95%" border="0">
          <tr>
            <td width="19%">No Telp </td>
            <td width="81%">: <?=$data->no_hp; ?></td>
          </tr>
          </table>
    </div></td>
    </tr>
  <tr>
    <td><div align="center">
      <table width="95%" border="0">
          <tr>
            <td width="19%">Alamat</td>
            <td width="81%">:  <?=$data->alamat; ?></td>
          </tr>
          </table>
    </div></td>
    </tr>
</table><br />

<table width="100%" border="1">
  <tr>
    <th colspan="4" bordercolor="#000000" bgcolor="#000000" scope="col"><div align="left"><span class="style1" style="padding:20px;">Produk </span></div></th>
    </tr>
  <tr>
    <td><div align="center"><strong>Type</strong></div></td>
    <td><div align="center"><strong>No Serial </strong></div></td>
    <td><div align="center"><strong>Kelengkapan</strong></div></td>
    <td><div align="center"><strong>Keterangan</strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <?=$data->nama_barang; ?>
    </div></td>
    <td><div align="center">
      <?=$data->invoice; ?>
    </div></td>
    <td><div align="center">
      <?=$data->kelengkapan; ?>
    </div></td>
    <td><div align="center">
      <?=$data->keterangan; ?>
    </div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
      <table width="95%" border="0">
          <tr>
            <th width="24%" scope="row"><div align="left">Tanggal Masuk </div></th>
            <td width="76%">: <?=date('d/m/Y', strtotime($data->tanggal_masuk)); ?></td>
          </tr>
          </table>
    </div></td>
    </tr>
  <tr>
    <td colspan="4"><div align="center">
      <table width="95%" border="0">
        <tr>
          <th width="24%" scope="row"><div align="left">Estimasi Pengerjaan </div></th>
          <td width="76%">: <?=$data->estimasi; ?></td>
        </tr>
      </table>
    </div></td>
    </tr>
  <tr>
    <td colspan="4"><div align="center">
      <table width="95%" border="0">
        <tr>
          <th width="24%" scope="row"><div align="left">Status</div></th>
          <td width="76%">:</td>
        </tr>
      </table>
    </div></td>
    </tr>
  <tr>
    <td colspan="4"><div align="center">
      <table width="95%" border="0">
        <tr>
          <th width="24%" scope="row"><div align="left">Estimasi Biaya </div></th>
          <td width="76%">: Rp. <?=number_format($data->biaya,0,".","."),',00';
                  ?></td>
        </tr>
      </table>
    </div></td>
    </tr>
</table>
<br />
<table width="100%" border="1">
  <tr>
    <th rowspan="2" bgcolor="#000000" scope="col"><div align="center" class="style2">Tanggal Masuk </div></th>
    <th rowspan="2" bgcolor="#000000" scope="col"><div align="center" class="style2">Dealler</div></th>
    <th colspan="2" bgcolor="#000000" scope="col"><div align="center" class="style2">Teknisi</div></th>
    <th rowspan="2" bgcolor="#000000" scope="col"><div align="center" class="style2">Total</div></th>
  </tr>
  <tr>
    <td bgcolor="#000000"> <div align="center" class="style2">Start </div></td>
    <td bgcolor="#000000"><div align="center" class="style2">Finish</div></td>
    </tr>
  <tr>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tgl : </td>
    <td>Tgl :</td>
    <td>Tgl :</td>
    <td>Tgl :</td>
    <td> Tgl :</td>
  </tr>
</table>
<?php } ?>  

                   
            </div>
        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
  </div>
  

  </div>
  </div>
</section>
