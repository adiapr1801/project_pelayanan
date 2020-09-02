<!-- /.pembatas  -->
<div class="container-flud">
<!-- /.mulai Section atas  -->

<!-- /.akhir section atas  -->

<!-- /.awal content  -->
        <div class="row">
          <div class="col-lg-12">
<!-- /.button tambah  -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin-bottom :5px"><i class="fa fa-plus"></i> Tambah Transaksi</button> 
<!-- /.button tambah  -->
            <!-- <a class="btn btn-danger"  href="index.php?halaman=transaksi_selesai" style="margin-bottom :5px">
            Data Transaksi Selesai
            </a>
            <a class="btn btn-info"  href="index.php?halaman=data_pelanggan" style="margin-bottom :5px">
            Data Pelanggan
            </a>        -->

            <br>
            <br>
<!-- /.awal table  -->
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tipe</th>
                  <th>Teknisi</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
            </thead>
<!-- /.php menampilkan data  -->
<?php
include('php/koneksi.php');	
	
  $query = mysqli_query($koneksi,"select * from pelangganhadir WHERE status='Dalam Antrean' OR status='Proses' OR status='Konfirmasi' OR status='Selesai'
  OR status='Gagal'")or die(mysql_error);
  
  ?>
            <tbody>
                <?php 
                  $no = 1;
                 
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['barang']; ?></td>
                  <td><?php echo $data['teknisi']; ?></td>
                  <td><?php echo $data['status']; ?></td>
                  <td>
<!-- /.tombol cetAK data  -->
                    <a class="btn btn-default btn-xs" target="_blank" href="../../report/cetak_invoice.php?invoice=<?php echo $data['invoice']; ?>">
                    Cetak 
                    </a>
                     <a href="modal_ambil.php?invoice=<?php echo $data['invoice']; ?>"  target="_blank" class="btn btn-warning btn-xs" id="tombol_show">
                    Ambil
                    </a>
<!-- /.tombol edit data  -->
                    <a class="btn btn-success btn-xs" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $data['no_hp'] ?>&text=Halo%20pelanggang%20Manxi%20Image%20Printer,%20kami%20ingin%20memberitahukan%20bahwa%20printer%20sudah%20selesai%20dikerjakan%20oleh%20teknisi%20kami&source=&data=&app_absent=">
                    Whatsapp 
                    </a>
                    <a class="btn btn-danger btn-xs"  href="php/hapus.php?id=<?php echo $data['id'] ?>">
                    Hapus
                    </a>
<!-- /.tombol edit data 
                    <a class="btn btn-info btn-xs" id="edit_transaksi" data-toggle="modal" data-target="#edit"
                      data-id="<?=$data->id; ?>"
                      data-nama_barang="<?=$data->nama_barang; ?>"
                      data-nama_pemilik="<?=$data->nama_pemilik; ?>"
                    >Update5
                    </a>
                  -->
                  </td>
                  
                </tr>
               
                <?php } ?>   
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>
              <?php 
              include '.modal_update.php';
              include '.modal_tambah.php';
              include '.modal_cetak.php';
              include '.modal_edit.php';

             ?>
            </div>

          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>
