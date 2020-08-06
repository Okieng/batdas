    <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><?= $judul; ?></h3>
                            <table class="table" id="example">
                              <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Id Transaksi</th>
                                  <th>Tanggal Pembelian</th>
                                  <th>Status</th>
                                  <th>Total Harga</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($dettransaksi as $d ) : ?>
                                <tr>
                                  <th><?= $d['id']; ?></th>
                                  <td><?= $d['id_transaksi']; ?></td>
                                  <td><?= $d['tgl_pembelian']; ?></td>
                                  <td><?= $d['status']; ?></td>
                                  <td><?= $d['total_harga']; ?></td>
                                  <td>
                                    <a href="<?= base_url('admin/detailTransaksi/'. $d['id_transaksi']); ?>"><button class="btn btn-secondary data">detail</button></a>
                                    | <a href="<?= base_url('admin/hapusdet/'. $d['id']); ?>"><button class="btn btn-danger hapus">Delete</button></a>  
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
            
            <footer class="footer text-center"> 2020</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wra