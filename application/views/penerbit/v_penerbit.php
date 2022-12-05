<div class="container-fluid">
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Data Penerbit
                  </p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                  <a href="<?= base_url() ?>penerbit/tambah_penerbit" class="btn btn-success"><i></i>Tambah Penerbit</a>
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> Id Penerbit</th>
                          <th> Nama Penerbit</th>
                          <th> Aksi </th>
                        </tr>
                      </thead>

                            <tbody>
                                <?php
                                foreach($data as $row) {?>
                                    <tr>
                                        <td><?= $row->id_penerbit;?></td>
                                        <td><?= $row->nama_penerbit;?></td>
                                        <td>
                                            <a href="<?= base_url()?>penerbit/edit/<?= $row->id_penerbit;?>" class="btn btn-success btn-sm"> Edit </a>
                                            <a href="<?= base_url()?>penerbit/delete/<?= $row->id_penerbit;?>" class="btn btn-danger btn-sm"onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Delete </a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            