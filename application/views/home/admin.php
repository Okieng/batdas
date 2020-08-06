<div class="pesan" data-id="<?= $this->session->flashdata('pesan'); ?>"></div>
<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title"><?= $judul; ?></h3>
                            <a href="<?= base_url('admin/tambahMenu'); ?>"><button type="" class="btn btn-menu">Tambah Menu</button></a><br><br><br>
                            <table class="table" id="example">
                              <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Nama</th>
                                  <th>Gambar</th>
                                  <th>Tipe</th>
                                  <th>Harga</th>
                                  <th>Qty</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($menu as $m ) : ?>
                                <tr>
                                  <td><?= $m['id']; ?></td>
                                  <td><?= $m['nama']; ?></td>
                                  <td><?= $m['gambar']; ?></td>
                                  <td><?= $m['tipe']; ?></td>
                                  <td><?= $m['harga']; ?></td>
                                  <td><?= $m['qty']; ?></td>        
                                  <td>
                                    <a href="<?= base_url('admin/update/'. $m['id']); ?>"><button type="button" class="btn btn-primary">
                                     Update
                                   </button></a>
                                    | <a href="<?= base_url('admin/hapus/'. $m['id']); ?>"><button class="btn btn-danger hapus">Delete</button></a>  
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