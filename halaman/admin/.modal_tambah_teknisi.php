<div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Tambah Teknisi</b></h4>
                  </div>
                  <form action="" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="nama">Nama Teknisi</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="user">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="pass">Password</label>
                        <input type="text" name="password" class="form-control" id="password" required>
                      </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                    </div>

                  </form>
                    <?php
                    include("../transaksi/php/koneksi.php");
                  if(@$_POST['tambah']){

                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query=("INSERT INTO teknisi (nama,username,password) VALUE ('$nama','$username','$password')");
                    $sql = mysqli_query($koneksi,$query);
                    echo"<script>window.location='?halaman=teknisi';</script>";
                  }


               ?>
                </div>
              </div>
              

            </div>