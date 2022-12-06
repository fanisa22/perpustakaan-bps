<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
              <form method="post" action="<?= base_url()?>galeri/simpan" enctype="multipart/form-data">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Data Galeri
                  </p>
                  <hr>
                  <form class="forms-sample">
                  
                <div class="form-group">
                    <label for="exampleInputName1">Nama Foto</label>
                    <input type="text" name="nama" class="form-control" placeholder="Input Nama Foto" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Foto</label>
                    <input type="file" name="foto" class="form-control" accept="image/*" required>
                </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>galeri" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>

            