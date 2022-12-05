<div class="container-fluid">
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Galeri Foto
                  </p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                  <a href="<?= base_url() ?>galeri/tambah_galeri" class="btn btn-success"><i></i>Tambah Foto</a>
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> Id Galeri</th>
                          <th> Nama Foto</th>
                          <th> Foto</th>
                          <th> Aksi </th>
                        </tr>
                      </thead>

                            <tbody>
                            <?php
                    foreach ($data as $row) {?>
                    <tr>
                        <td><?= $row->id_galeri;?></td>
                        <td><?= $row->nama;?></td>
                        <td class="text-center">
                            <a href="<?= base_url()?>assets/gambar/galeri/<?= $row->foto;?>" target="_blank">
                                <img src="<?= base_url()?>assets/gambar/galeri/<?= $row->foto;?>" alt="">
                            </a>
                        </td>
                        <td>
                                <a href="<?= base_url()?>galeri/hapus/<?= $row->id_galeri;?>" class="btn btn-danger btn-sm"onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Delete </a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            