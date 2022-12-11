<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Data Buku
                  </p>
                  <hr>
            <form method="post" action="<?= base_url() ?>buku/simpan" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">

            <div class="form-group">
                <label for="exampleInputName1">Id Buku</label>
                    <input type="text" name="id_buku" value="<?= $id_buku; ?>" class="form-control" id="exampleInputName1" readonly>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="exampleInputName1" placeholder="Judul Buku" required>
            </div>
               
            <div class="form-group">
                <label for="exampleInputName1">Penerbit</label>
                    <select name="id_penerbit" class="form-control select2" id="exampleInputName1" required>

                    <option value=""> - Pilih Penerbit - </option>
                    <?php
                        foreach ($penerbit as $row) {?>
                            <option value = "<?= $row->id_penerbit;?>"><?= $row-> nama_penerbit; ?></option> 
                    <?php }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Pengarang</label>
                    <select name="id_pengarang" class="form-control select2" id="exampleInputName1" required>

                    <option value=""> - Pilih Pengarang - </option>
                    <?php
                        foreach ($pengarang as $row) {?>
                            <option value = "<?= $row->id_pengarang;?>"><?= $row-> nama_pengarang; ?></option> 
                    <?php }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">ISBN</label>
                    <input type="text" name="isbn" class="form-control" id="exampleInputName1" placeholder="ISBN" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="exampleInputName1" placeholder="Tahun" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Jumlah Halaman Buku</label>
                    <input type="text" name="halaman" class="form-control" id="exampleInputName1" placeholder="Jumlah Halaman" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Foto Buku</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputName1" accept="image/*" required>
            </div>


               <div class="box-footer">
               <button type="submit" class="btn btn-primary"><i class="fa fa-save (alias)"></i> Simpan</button>
               <a href="<?=base_url() ?>buku" class="btn btn-danger"> <i class="fa fa-times"></i> Cancel</a>
                   
            </div>
</form>
                </div>
              </div>
            </div>