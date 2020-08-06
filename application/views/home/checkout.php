


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
    <div class="col-md-6">
        
      	<form action="<?= base_url('home/insertNama'); ?>" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Total Bayar</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="total" value="<?= $this->cart->total(); ?>" readonly>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tangal Pembelian</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl" value="<?= date("Y/m/d"); ?>" readonly>
		  </div>
		  <button type="submit" class="btn btn-menu">Konfiramsi Pembayaran</button>
		 </form>

    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- modal -->

<!-- endModal -->