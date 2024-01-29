<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>File Sharing System | Admin Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
  
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>FS</b></span>
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><img src="/uploads/Logo.png"></span> -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url(); ?>assets/img/logobwsl01.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= strtoupper($this->session->userdata('username')) ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url(); ?>assets/img/logobwsl01.png" class="img-circle" alt="User Image">
                <p>
                  <?= strtoupper($this->session->userdata('username')) ?> - <?= strtoupper($this->session->userdata('peringkat')) ?>
                </p>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url(); ?>assets/img/logobwsl01.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= strtoupper($this->session->userdata('username')) ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMINISTRATOR</li>
        <li><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Divisi</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>hukum"><i class="fa fa-circle-o"></i> Hukum & <br>Penyelesaian Sengketa</a></li>
            <li><a href="<?= base_url(); ?>pencegahan"><i class="fa fa-circle-o"></i> Pencegahan,<br> PARMAS & HUMAS</a></li>
            <li><a href="<?= base_url(); ?>penanganan"><i class="fa fa-circle-o"></i> Penanganan Pelanggaran, <br>Data & Informasi</a></li>
            <li><a href="<?= base_url(); ?>sdm"><i class="fa fa-circle-o"></i> SDM, Organisasi, <br>Pendidikan & Pelatihan</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Taman Pustaka</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>tamanpustaka/buku"><i class="fa fa-circle-o"></i> Buku </a></li>
            <li><a href="<?= base_url(); ?>tamanpustaka/majalah"><i class="fa fa-circle-o"></i> Majalah</a></li>
          </ul>
        </li> 

        

        <?php
          if ($this->session->userdata('peringkat') == 'admin') {
              echo '
              <li class="header">SUPER-ADMIN</li>
              <li><a href="'.base_url().'man_user"><i class="fa fa-users"></i> <span>Management User</span></a></li>
              <li><a href="'.base_url().'verifikasi"><i class="fa fa-check"></i> <span>Verifikasi</span></a></li>
              ';
          }
        ?>
        <li class="header">END</li>
        <li><a href="<?= base_url(); ?>user/logout"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->