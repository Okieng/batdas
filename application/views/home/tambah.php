 <!-- /row -->
                <a href="<?= base_url('admin'); ?>" title="">Kembali Ke Menu</a><br><br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="<?= base_url('admin/tambahMenu'); ?>" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Menu</label>
                            <input type="text" class="form-control" id="text" placeholder="Nama Menu..." name="nama">
                             <?= form_error('nama','<small class="text-danger pl-3">', '</small>');  ?>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                          </div>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Tipe</label>
                                    <input type="text" class="form-control" id="text" placeholder="Tipe Menu..." name="tipe">
                                     <?= form_error('tipe','<small class="text-danger pl-3">', '</small>');  ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input type="text" class="form-control" id="text" placeholder="Harga Menu..." name="harga">
                                     <?= form_error('harga','<small class="text-danger pl-3">', '</small>');  ?>
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="number" class="form-control" placeholder="Stok" min="0" max="200" name="qty">
                             <?= form_error('qty','<small class="text-danger pl-3">', '</small>');  ?>
                          </div>
                          <button type="submit" class="btn btn-outline-kontol">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->