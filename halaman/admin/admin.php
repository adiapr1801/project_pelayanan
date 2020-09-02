<?php 
include "../../model/m_admin.php";

$admin = new Admin($connection);
if(@$_GET['act'] == ''){
 ?>
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <?php
            include("inc/group.php");
          ?>
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Admin</button>
            <section class="col-lg-7 connectedSortable" style="width:80%;"  >
              <!-- Custom tabs (Charts with tabs)-->
              <table class="table table-bordered table-hover table-striped" style="wudth:100%">
                <tr>
                  <th>Nama</th>
                  <th>User</th>
                  <th>Password</th>
                  <th>Pilihan</th>
                </tr>
<!-- /.php menampilkan data  -->              
                <?php 
                  $tampil= $admin->tampil();
                  while($data = $tampil->fetch_object()){

                   ?>
                <tr>

                  <td><?=$data->nama; ?></td>
                  <td><?=$data->username; ?></td>
                  <td><?=$data->password; ?></td>
                 
                  <td>
<!-- /.tombol edit data  -->
                    <a id="edit_admin" data-toggle="modal" data-target="#edit"
                      data-id="<?=$data->id; ?>"
                      data-nama="<?=$data->nama; ?>"
                      data-username="<?=$data->username; ?>"
                      data-password="<?=$data->password; ?>">
                    <button class="btn btn-info btn-xs">Edit</button>
                    </a>
<!-- /.tombol edit data  -->
                    <a href="?halaman=admin&act=del&id=<?=$data->id; ?>" onclick="return confirm('Apakah anda yakin ?')">
                    <button class="btn btn-danger btn-xs">Hapus</button>
                    </a>
                  </td>
                </tr>
                <?php } ?>
<!-- /.php menampilkan data  -->
              </table>
              <?php 
                  include '.modal_edit_admin.php';
                  include '.modal_tambah_admin.php';
            ?>
              <!-- /.box -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <!-- right col -->
          </div><!-- /.row (main row) -->
          <?php 
}else if(@$_GET['act']=='del') {
  $admin->hapus($_GET['id']);
  header("location: ?halaman=admin");
}
