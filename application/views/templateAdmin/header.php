<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('vendor/adminbatdas/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?= base_url('vendor/adminbatdas/css/animate.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('vendor/adminbatdas/css/style.css'); ?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?= base_url('vendor/adminbatdas/css/colors/default.css'); ?>" id="theme" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
 
    
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background-color:#ff7920 !important;">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="dashboard.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="<?= base_url('vendor/adminbatdas/plugins/images/admin-logo.png '); ?>" alt="home"
                                class="dark-logo" />
                            <!--This is light logo icon--><img src="<?= base_url('vendor/adminbatdas/plugins/images/admin-logo-dark.png'); ?>" alt="home"
                                class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                            <!--This is dark logo text--><img src="<?= base_url('vendor/adminbatdas/plugins/images/admin-text.png'); ?>" alt="home"
                                class="dark-logo" />
                            <!--This is light logo text--><img src="<?= base_url('vendor/adminbatdas/plugins/images/admin-text-dark.png'); ?>" alt="home"
                                class="light-logo" />
                        </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                       <a href="<?= base_url('admin/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true">Log out</i></a>
                    </li>
                </ul>
            </div>
           
        </nav>
        
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                            class="hide-menu">Navigation</span></h3>
                </div>
                <?php if($this->session->userdata('role_id') == 1) : ?>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?= base_url('admin'); ?>" class="waves-effect"><i class="fa fa-cutlery fa-fw"
                                aria-hidden="true"></i>Menu</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/pembeli'); ?>" class="waves-effect"><i class="fa fa-user" aria-hidden="true"></i> Pembeli</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/transaksi'); ?>" class="waves-effect"><i class="fa fa-exchange fa-fw"
                                aria-hidden="true"></i>Transaksi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/detTransaksi'); ?>" class="waves-effect"><i class="fa fa-info-circle fa-fw"
                                aria-hidden="true"></i>Detail Transaksi</a>
                    </li>
                </ul>
                <?php else: ?>
                    <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?= base_url('admin/kasir'); ?>" class="waves-effect"><i class="fa fa-cutlery fa-fw"
                                aria-hidden="true"></i>Transaksi</a>
                    </li>
                    
                </ul>
                <?php endif; ?>
            </div>
        </div>
      
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?= $judul; ?></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"><?= $judul; ?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>