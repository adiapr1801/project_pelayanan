
<div class="container-flud">
<!-- /.mulai Section atas  -->

<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">

<h3 align="center">
          <b><img src="download.jpg" height="100"></b><br>
          Selamat Bekerja, <?php echo $teknisi ?> 
 </h3>
       
        <div class="row">
          <div class="col-lg-12">
<!-- /.button tambah  -->
            
            <b>Pekerjaan yang belum terselesaikan<b><br>
            <br>
<!-- /.awal table  -->
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>No Invoice</th>
                  <th>Tanggal Masuk</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                  <th>Pilihan</th>
                </tr>
            </thead>
<!-- /.php menampilkan data  -->
            <tbody>
                <?php 
                include("../transaksi/php/koneksi.php");
                  $no = 1;
                  $teknisi=$_GET['teknisi'];
                  $query = mysqli_query($koneksi,"select * from pelangganhadir WHERE status != 'Selesai' AND status != 'Diambil' AND teknisi='$teknisi'")or die(mysql_error);
                  while($data=mysqli_fetch_array($query)){
                   ?>
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?php echo $data['invoice'] ?></td>
                  <td><?php echo $data['tanggal'] ?></td>
                  <td><?php echo $data['keterangan'] ?></td>
                  <td><?php echo $data['status'] ?></td>
                  <td>
                    <form action="gantistatus.php?id=<?php echo $data['id'] ?>&teknisi=<?php echo $teknisi ?>" method="post">
                      <select name="status">
                        <option name="Dalam Antrean">Dalam Antrean</option>
                        <option name="Konfirmasi">Konfirmasi</option>
                        <option name="Proses">Proses</option>
                        <option name="Selesai">Selesai</option>
                      </select>
                      <input type="submit" class="btn btn-success btn-sm" value="Ubah"/>
                    </form>
                  </td>
                </tr>
               
                <?php } ?>   
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>
            </div>

           <!--  <?php 
              include '.modal_update.php';
              include '.modal_tambah.php';
              include '.modal_cetak.php';
              include '.modal_ambil.php';
              include '.modal_edit.php';

             ?> --> 

          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>
