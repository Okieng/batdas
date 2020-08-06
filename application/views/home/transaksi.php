<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><?= $judul; ?></h3>
                            <table class="table" id="example">
                              <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Pembeli Id</th>
                                  <th>Menu Id</th>
                                  <th>qty</th>
                                  <th>Total</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($transaksi as $t ) : ?>
                                <tr>
                                  <th><?= $t['id']; ?></th>
                                  <td><?= $t['pembeli_id']; ?></td>
                                  <td><?= $t['menu_id']; ?></td>
                                  <td><?= $t['qty']; ?></td>
                                  <td><?= $t['total']; ?></td>
                                  <td>
                                    <a href="<?= base_url('admin/hapusTran/'. $t['id']); ?>"><button class="btn btn-danger hapus">Delete</button></a>  
                                  </td>
                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
