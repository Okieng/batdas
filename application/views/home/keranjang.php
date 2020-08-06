


<h1 class="wow fadeInDown section-1">Cart</h1>
<br><br><br><br><br><br>
</header><!-- /header -->
<style type="text/css" media="screen">
  table{
    text-align: center;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <?php if($this->cart->total() == 0) : ?>
            <div class="alert alert-danger" role="alert">
              Tidak Ada Menu Yang Dipilih <a href="<?= base_url('home/menu'); ?>" class="alert-link"><button type="submit" class="btn btn-menu">Continue Shopping</button></a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <th>#</th>
           
            <th>Nama Produk</th>
            <th>Quantity</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Hapus</th>
          </thead>
          <tbody>
             <?php $i=1; ?>
            <?php foreach($this->cart->contents() as $item) : ?>

              <tr>
                <td><?= $i++; ?></td>
                
                <td><?= $item['name']; ?></td>
                <td><?= $item['qty']; ?></td>
                <td><?= $item['price']; ?></td>
                <td><?= $item['subtotal']; ?></td>
                <td>
                  <a href="<?= base_url('home/hapusId/'. $item['rowid']); ?>"><i class="fa fa-trash hapus" aria-hidden="true" ></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
            <tr>
              
              
              <td colspan="2">Total Pembayaran</td>
              
              <td><?= $this->cart->total_items(); ?></td>
              <td></td>
              <td><?= $this->cart->total(); ?></td>
              <td colspan="2">
                <div class="text-center">
                  <a href="<?= base_url('home/checkout'); ?>"><button class="btn btn-menu">Bayar</button></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
                <a href="<?= base_url('home/menu'); ?>"><button class="btn btn-menu">Continue Shopping</button></a>
      </div>
        <?php endif; ?>  
      

    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('home/insertNama'); ?>" method="post">
           <div class="form-group">
            <!-- input name -->
            <label for="nama">Masukan Nama </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" autocomplete="off">
           </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">bayar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- endModal -->