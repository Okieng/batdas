<style type="text/css" media="screen">
	  footer{
    background-color:#733317;
  }

  .text-footer, label{
    color: white;
  }
  
    .nav-menu{
  color: white !important;
  margin-right: 20px;
  text-decoration: none !important;
}

a:hover{
  color: #fff !important;
  transition: 0.5s;
}
</style>
<div class="pesan" data-id="<?= $this->session->flashdata('pesan'); ?>"></div>
<br><br><br><br><br><br><br><br>
<h1 class="section-1 wow slideInDown">Our Menu</h1>
<hr style="width: 5%; margin-top:1%;" class="wow slideInDown">
<br><br><br><br><br><br>
</header><!-- /header -->

<div align="center">
        <button class="btn btn-menu filter-button" data-filter="all">Semua Menu</button>
        <button class="btn btn-menu filter-button" data-filter="hdpe">Makanan</button>
        <button class="btn btn-menu filter-button" data-filter="sprinkle">Minuman</button>
        
    </div>
    <br>
<div class="container">
	<div class="row wow slideInLeft">
		<?php foreach($makanan as $m ): ?>
			<div class="gallery_product col-md-3 filter hdpe">
				<img src="<?= base_url('vendor/img/listMenu/'. $m['gambar']); ?>"  class="rounded-circle image">
				<a href="#"><h4><?= $m['nama']; ?></a></h4>
				<a href="#"><p></a></p><hr>
				<p style="margin-top:-15px;">Rp.<?= $m['harga']; ?></p><br>
				<div style="text-align:center; margin-top: -15px;">  
				    <a href="<?= base_url('home/tambah/'. $m['id']); ?>"><button class="btn btn-menu">Pesan Sekarang</button></a> 
				    <br><br><br><br><br>
				</div>
			</div>
		<?php endforeach; ?>
			
	</div>
	<div class="row wow slideInRight" style="margin-top:50px;">
		<?php foreach($minuman as $ma): ?>
			<div class="gallery_product col-md-3 filter sprinkle">
				<img src="<?= base_url('vendor/img/listMenu/'. $ma['gambar']); ?>"  class="rounded-circle image">
				<a href="#"><h4><?= $ma['nama']; ?></a></h4>
				<a href="#"><p>Dessert</a></p><hr>
				<p style="margin-top:-15px;">Rp.<?= $ma['harga']; ?></p><br>
				<div style="text-align:center; margin-top: -15px;">  
				  <a href="<?= base_url('home/tambah/'. $ma['id']); ?>"><button class="btn btn-menu">Pesan Sekarang</button></a> 
				</div>  
			</div>
		<?php endforeach; ?>
			
	</div>
	
	</div>
</div>
<br><br><br><br>