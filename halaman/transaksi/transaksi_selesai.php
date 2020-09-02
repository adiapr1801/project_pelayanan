<?php 
include('php/koneksi.php');
  $query = mysqli_query($koneksi,"select * from pelangganhadir where status='Diambil'")or die(mysql_error);

  ?>

<!-- /.pembatas  -->
<div class="container-flud">
<!-- /.mulai Section atas  -->

<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">

<h1 align="center">
          <b>Halaman Transaksi Selesai</b>
 </h1>
       
        <div class="row">
          <div class="col-lg-12">
            
            <br>
            <br>
<!-- /.awal table  -->
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                 <tr>
                  <th>No.</th>
                  <th>No Invoice</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Keluar</th>
                  <th>Nama Pengambil</th>
                  <th>Action</th>
                </tr>
            </thead>
<!-- /.php menampilkan data  -->
            <tbody>
            <?php 
                  $no = 1;
                  while($data=mysqli_fetch_array($query)){
                   ?>
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?php echo $data['invoice']; ?> </td>
                  <td><?php echo $data['tanggal']; ?></td>
                  <td><?php echo $data['tglkeluar']; ?></td>
                  <td><?php echo $data['pengambil']; ?> </td>
                  <td><a class="btn btn-danger btn-xs"  href="php/hapus2.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin ?')">
                    Hapus
                    </a></td>
                </tr>
               
                <?php } ?>   
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>
            </div>

          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>
