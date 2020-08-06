<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Condet Restaurant | Menu</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= base_url('vendor/css/stylee.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="<?= base_url('vendor/css/animate.css'); ?>" rel="stylesheet">
  </head>
  <body>
<style type="text/css" media="screen">
	.rounded-circle{
		width: 100px !important;
		height: 100px !important;
	}

	.btn-menu{
		background-color: #733317 !important;
		color: white;
		transition: 0.5s;
	}

	.btn-menu:hover{
		background:transparent !important;
		border-color:#733317;
		color:#733317;
	}

	hr{
	  border-color: #733317 !important;
	  background-color: #fff !important;
	  width: 20%;
	  height: 2px;
	  margin-top:-10px;
}

</style>

<header id="header" class="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="navbar-toggler-icon"></span>
	</button>
			<a class="nav-menu" href="#">Condet Restaurant</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-menu" href="<?= base_url('home'); ?>">Home</a>
						</li>
						
						<li class="nav-item active">
							 <a class="nav-menu" href="<?= base_url('home/menu'); ?>">Menu</a>
						</li>
						
						<li class="nav-item active">
							 <a class="nav-menu" href="#">|</a>
						</li>
						<li>
							<p class="text-white"><a href="<?= base_url('home/keranjang'); ?>" class="text-white"><i class="fa fa-shopping-cart" aria-hidden="true"><?= $this->cart->total_items(); ?></i></a></p>
						</li>

						<li class="nav-item active ml-3">
							 <a href="<?= base_url('auth'); ?>"><i class="fa fa-sign-in text-white" aria-hidden="true"> Login</i></a>
						</li>
	
	
					</ul>
				</div>
	</div>
</nav>
