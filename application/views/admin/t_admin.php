<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
              <form method="post" action="<?= base_url()?>admin/simpan">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Data Admin
                  </p>
                  <hr>
                  <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $id;?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Input Nama Admin" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Input Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Input Password" required>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Level</label>
                 <select name="level" class="form-control"required>
                    <option value=""> - Pilih Jenis Level - </option>
                    <option value="Super Admin"> Super Admin</option>
                    <option value="Admin"> Admin </option>
                </select>
                  </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>penerbit" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>

            