<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
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
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Username</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Username">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>

                    <div class="form-group">
                    <label for="exampleInputPassword4">Level</label>
                    <select name="level" class="form-control" required>
                        <option value=""selected> 1 </option>
                        <option value=""selected> 2 </option>
                        <option value=""selected> - Pilih Level - </option>
                    </select>
                </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>admin" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>