    <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><?= $judul; ?></h3>
                            <table class="table" id="example">
                              <thead>
                                <tr>
                                 
                                  <th>Nama Pembeli</th>
                                  <th>tanggal pembelian</th>
                                  <th>Status</th>
                                  <th>Total Harga</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th><?= $det['nama_pembeli']; ?></th>
                                  
                                  <td><?= $det['tgl_pembelian']; ?></td>
                                  <td><?= $det['status']; ?></td>
                                  <td><?= $det['total_harga']; ?></td>
                                  
                                </tr>
                                
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