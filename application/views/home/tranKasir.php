<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><?= $judul; ?></h3>
                            <table class="table" id="tran">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama Pembeli</th>
                                  <th>Qty</th>
                                  <th>Tanggal Pemesanan</th>
                                  <th>Status</th>
                                  <th>Total Harga</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              
                                <?php foreach($kasir as $k ) : ?>
                                <tr>
                                  <th><?= $k['id_transaksi']; ?></th>
                                  <th><?= $k['nama_pembeli']; ?></th>
                                  <td><?= $k['qty']; ?></td>
                                  <td><?= $k['tgl_pembelian']; ?></td>
                                  <td><?= $k['status']; ?></td>
                                  <td><?= $k['total_harga']; ?></td>
                                  <td>
                                    <a href="<?= base_url('admin/konfirmasi/'. $k['id_transaksi']); ?>"><button class="btn btn-primary hapus">Konfirmasi Pembayaran</button></a>  
                                  </td>
                                </tr>
                                <?php endforeach; ?> -->
                              </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
