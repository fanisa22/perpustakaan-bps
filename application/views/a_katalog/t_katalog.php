<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Data Katalog
                  </p>
                  <hr>
            <form method="post" action="<?= base_url() ?>a_katalog/simpan" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">

            <div class="form-group">
                <label for="exampleInputName1">Id Katalog</label>
                    <input type="text" name="id_katalog" value="<?= $id_katalog; ?>" class="form-control" id="exampleInputName1" readonly>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Judul Buku</label>
                    <select name="id_buku" class="form-control select2" id="exampleInputName1" required>
                        <option value=""> - Pilih Judul Buku - </option>
                        <?php
                            foreach ($buku as $row) {?>
                                <option value = "<?= $row->id_buku;?>"><?= $row-> judul_buku; ?></option> 
                        <?php }
                        ?>
                    </select>
            </div>
               

            <div class="form-group">
                <label for="exampleInputName1">E - Book</label>
                    <input type="file" name="e_book" class="form-control" id="exampleInputName1" accept=".pdf" required>
            </div>


               <div class="box-footer">
               <button type="submit" class="btn btn-primary"><i class="fa fa-save (alias)"></i> Simpan</button>
               <a href="<?=base_url() ?>a_katalog" class="btn btn-danger"> <i class="fa fa-times"></i> Cancel</a>
                   
            </div>
</form>
                </div>
              </div>
            </div>