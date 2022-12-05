
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Perpustakaan BPS Kota Malang</h4>
                  <p class="card-description">
                    Data Admin
                  </p>
                  <div class="row">
                    <br>
    <div class="col-md-6">
        <a href="<?= base_url() ?>admin/tambah_admin" class="btn btn-success"><i></i> Tambah Admin</a>
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                    <thead>
                            <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                foreach($data as $row) {?>
                                    <tr>
                                        <td><?= $row->id; ?></td>
                                        <td><?= $row->nama;?></td>
                                        <td><?= $row->username;?></td>
                                        <td><?= $row->password;?></td>
                                        <td><?= $row->level;?></td>
                                        <td>
                                            <a href="<?= base_url()?>admin/edit/<?= $row->id;?>" class="btn btn-success btn-sm"> Edit </a>
                                            <a href="<?= base_url()?>admin/delete/<?= $row->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Delete </a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            