<div class="container-fluid">
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Data Feedback
                  </p>
                  <hr>
                  <div class="row">

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> Id Feedback</th>
                          <th> Nama </th>
                          <th> Email </th>
                          <th> Subject </th>
                          <th> Message </th>
                        </tr>
                      </thead>

                            <tbody>
                                <?php
                                foreach($data as $row) {?>
                                    <tr>
                                        <td><?= $row->id;?></td>
                                        <td><?= $row->nama;?></td>
                                        <td><?= $row->email;?></td>
                                        <td><?= $row->subject;?></td>
                                        <td><?= $row->message;?></td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            