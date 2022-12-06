<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Edit Pengarang
                  </p>
                  <hr>
                  <form method="post" action="<?= base_url()?>pengarang/update">
                  <div class="form-group">
                      <label for="exampleInputName1">IdPengarang</label>
                      <input type="text" name="id_pengarang" value="<?= $data['id_pengarang'];?>" class="form-control" id="exampleInputName1" readonly>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Nama Pengarang</label>
                      <input type="text" name="nama_pengarang" value="<?= $data['nama_pengarang'];?>" class="form-control" id="exampleInputName1" placeholder="Nama Pengarang" required>
                    </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>pengarang" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>