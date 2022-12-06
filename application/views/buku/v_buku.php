<div class="container-fluid">

<?php
    if(!empty($this->session->flashdata('info'))){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> <?= $this->session->flashdata('info')?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php }

?>

<div class="container-fluid">
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Data Buku
                  </p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                  <a href="<?= base_url() ?>buku/tambah_buku" class="btn btn-success"><i></i>  Tambah Buku</a>
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> Id Buku</th>
                          <th> Judul Buku</th>
                          <th> Nama Penerbit</th>
                          <th> Nama Pengarang</th>
                          <th> ISBN</th>
                          <th> foto</th>
                          <th> Aksi </th>
                      </thead>
                      <tbody>
                      <?php
                              foreach ($data->result() as $row) {?>
                              <tr>
                                  <td><?= $row->id_buku;?></td>
                                  <td><?= $row->judul_buku;?></td>
                                  <td><?= $row->nama_penerbit;?></td>
                                  <td><?= $row->nama_pengarang;?></td>
                                  <td><?= $row->isbn;?></td>
                                  <td class="text-center">
                                      <a href="<?= base_url()?>assets/gambar/buku/<?= $row->foto;?>" target="_blank">
                                          <img src="<?= base_url()?>assets/gambar/buku/<?= $row->foto;?>" alt="">
                                      </a>
                                  </td>
                                  <td>
                                  <a href="<?= base_url()?>buku/edit/<?= $row->id_penerbit;?>" class="btn btn-success btn-sm"> Edit </a>
                                <a href="<?= base_url()?>buku/hapus/<?= $row->id_buku;?>" class="btn btn-danger btn-sm"onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Hapus </a>

                        </td>
                    </tr>
                    <?php }
                    ?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            