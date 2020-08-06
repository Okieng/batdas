<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><?= $judul; ?></h3>
                            <table class="table" id="example">
                              <thead>
                                <tr>
                                 
                                  <th>Id</th>
                                  <th>Nama Pembeli</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                               
                                <?php foreach($pembeli as $p ) : ?>
                                <tr>
                                  
                                  <td><?= $p['id']; ?></td>
                                  <td><?= $p['nama_pembeli']; ?></td>
                                  <td>
                                    <a href="<?= base_url('admin/hapusPem/'. $p['id']); ?>"><button class="btn btn-danger hapus">Delete</button></a>  
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
   <footer class="footer text-center"> 2020 Tugas Besar Basis Data</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>