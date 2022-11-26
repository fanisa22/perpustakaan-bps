<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Perpustakaan BPS Kota Malang</h4>
                  <p class="card-description">
                    Tambah Admin
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Username</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword4">Level</label>
                    <select name="level" class="form-control" required>
                        <option value=""selected> - Pilih Level - </option>
                        <?php

                            foreach($login as $row) {?>
                                <option value="<?=$row->id_admin?>"> <?=$row->nama?>
                            <?php }
                        ?>
                    </select>
                </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>