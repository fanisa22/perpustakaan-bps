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
                    Data Katalog
                  </p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                  <a href="<?= base_url() ?>a_katalog/tambah_katalog" class="btn btn-success"><i></i>  Tambah Katalog</a>
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> Id Katalog</th>
                          <th> Judul Buku</th>
                          <th> E-Book</th>
                          <th> Aksi </th>
                      </thead>
                      <tbody>
                      <?php
                              foreach ($data->result() as $row) {?>
                              <tr>
                                  <td><?= $row->id_katalog;?></td>
                                  <td><?= $row->judul_buku;?></td>
                                  <td><?= $row->e_book;?></td>
                                  <td>
                                <a href="<?= base_url()?>a_katalog/hapus/<?= $row->id_katalog;?>" class="btn btn-danger btn-sm"onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Hapus </a>

                        </td>
                    </tr>
                    <?php }
                    ?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            