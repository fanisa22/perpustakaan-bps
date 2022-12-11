<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Edit Buku
                  </p>
                  <hr>
                  <form method="post" action="<?= base_url()?>buku/update">
                <div class="form-group">
                    <label for="exampleInputName1">Id Buku</label>
                    <input type="text" name="id_buku" value="<?= $data['id_buku'];?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Judul Buku</label>
                    <input type="text" name="judul_buku"  value="<?= $data['judul_buku'];?>" class="form-control" required>
                </div>
                
                <div class="form-group">
                <label for="exampleInputName1">Penerbit</label>
                    <select name="id_penerbit" class="form-control select2" id="exampleInputName1" required>

                    <?php
                        foreach ($penerbit as $row) {
                            if ($data['id_penerbit'] == $row->id_penerbit) {?>
                                <option value="<?= $row->id_penerbit;?>" selected><?= $row->nama_penerbit; ?> </option>
                    <?php } else{?>
                        <option value="<?= $row->id_penerbit;?>" ><?= $row->nama_penerbit; ?> </option>
                        <?php }
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Pengarang</label>
                    <select name="id_pengarang" class="form-control select2" id="exampleInputName1" required>

                    <?php
                        foreach ($pengarang as $row) {
                            if ($data['id_pengarang'] == $row->id_pengarang) {?>
                                <option value="<?= $row->id_pengarang;?>" selected><?= $row->nama_pengarang; ?> </option>
                    <?php } else{?>
                        <option value="<?= $row->id_pengarang;?>" ><?= $row->nama_pengarang; ?> </option>
                        <?php }
                        }
                    ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="exampleInputName1">ISBN</label>
                    <input type="text" name="isbn" value="<?= $data['isbn'];?>" class="form-control" id="exampleInputName1" placeholder="ISBN" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Tahun</label>
                    <input type="text" name="tahun" value="<?= $data['tahun'];?>" class="form-control" id="exampleInputName1" placeholder="Tahun" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Jumlah Halaman Buku</label>
                    <input type="text" name="halaman" value="<?= $data['halaman'];?>" class="form-control" id="exampleInputName1" placeholder="Jumlah Halaman" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Foto Buku</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputName1" accept="image/*" >
                    <img src="<?= base_url()?>assets/buku/gambar/<?= $data['foto'];?>" alt="" width="200">
            </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>buku" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
              </div>
            </div>