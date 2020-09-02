 <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Tambah Transksi</b></h4>
                  </div>
                  <form action="php/tambahpelanggan.php" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="nama_barang">Nama Pelanggan</label>
                        <input type="text" name="nama" class="form-control" id="nama_barang" required>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label" for="keluhan">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="keluhan" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="kelengkapan">No Hp (Whatsapp)</label>
                        <input type="text" name="nohp" class="form-control" id="kelengkapan" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="keterangan">Nama barang</label>
                        <input type="text" name="barang" class="form-control" id="keterangan" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="keterangan">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" id="keterangan" required>
                      </div>
                      <div class="form-group">
                      <label class="control-label" for="keterangan">Teknisi</label>
                        <?php
                          include("php/koneksi.php");
                          $query=mysqli_query($koneksi,"select nama from teknisi");
                        ?>
                         <select class="form-control select2" name="teknisi" style="width: 100%;">
                                     
                                      <option value="">--Pilih Teknisi--</option>
                                      <?php
                                      while($data=mysqli_fetch_array($query)){
                                     ?>
                                      <option value="<?php echo $data['nama'] ?>"><?php echo $data['nama'] ?></option>
                                      <?php
                                      }
                                      ?>

                    </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="biaya">Estimasi Biaya</label>
                        <input type="number" name="biaya" class="form-control" id="biaya" required>
                      </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                    </div>

                  </form>
                  
                </div>
              </div>
              

            </div>