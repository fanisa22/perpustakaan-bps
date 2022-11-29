<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
              <form method="post" action="<?= base_url()?>penerbit/simpan">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Data Penerbit
                  </p>
                  <hr>
                  <form class="forms-sample">
                  <div class="form-group">
                    <input type="text" name="id_penerbit" value="<?= $id_penerbit;?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="nama_penerbit" class="form-control" placeholder="Input Nama Penerbit" required>
                </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>penerbit" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>

            