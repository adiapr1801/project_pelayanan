<?php 
include('php/koneksi.php');
  $query = mysqli_query($koneksi,"select * from pelangganhadir")or die(mysql_error);

  ?>
<!-- /.pembatas  -->
<div class="container-flud">
<!-- /.mulai Section atas  -->

<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">

<h1 align="center">
          <b>Halaman Data Pelanggan </b>
 </h1>
       
        <div class="row">
          <div class="col-lg-12">
<!-- /.button tambah  -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin-bottom :5px"><i class="fa fa-plus"></i> Tambah Pelanggan</button> 
<!-- /.button tambah  -->
            <a class="btn btn-danger"  href="index.php" style="margin-bottom :5px">
            Data Transaksi
            </a>       

            <br>
            <br>
<!-- /.awal table  -->
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>No.Invoice</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. HP</th>
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
                  <td><?php echo $data['invoice']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['no_hp']; ?></td>
                  <td>
                    <a class="btn btn-success btn-xs"  href="http://wa.me/<?php echo $data['no_hp']; ?>">Chat by whattsapp
                    </a>
<!-- /.tombol edit data  -->
            
                  </td>
                </tr>  
                <?php } ?>
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>
            </div>
            <?php 
                  include '.modal_tambah_pelanggan.php';
            ?>
          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>
