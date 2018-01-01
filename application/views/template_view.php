<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- animate bootstrap notify -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/animate.min.css">

  <!-- Data tables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/dataTables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> 

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
    <div class="wrapper">

      <!-- template admin -->
      <?php if ($this->session->userdata('role') == 1): ?>
        <header class="main-header">
          <!-- Logo -->
          <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Bismillah</b></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>admin.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                  <!-- User image -->
                    <li class="user-header">
                      <img src="<?php echo base_url();?>/admin.png" class="img-circle" alt="User Image">
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng');?>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div>
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModall">Sign out</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active treeview">
                <a href="#">
                  <i class="fa fa-plus"></i> <span>Tambah Data</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo base_url(); ?>index.php/admin/addguru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/admin/addsiswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/admin/addindustri"><i class="fa fa-circle-o"></i> Data Industri</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-search"></i> <span>Lihat Data</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url(); ?>index.php/admin/dataguru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/admin/datasiswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/admin/dataindustri"><i class="fa fa-circle-o"></i> Data Industri</a></li>
                </ul>
              </li>
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <!-- template guru -->
      <?php elseif ($this->session->userdata('role') == 2): ?>
        <header class="main-header">
          <!-- Logo -->
          <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Bismillah</b></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>uploads/foto_guru/<?php echo $foto; ?>" class="user-image" alt="User Image">
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                  <!-- User image -->
                    <li class="user-header">
                      <img src="<?php echo base_url();?>uploads/foto_guru/<?php echo $foto; ?>" class="img-circle" alt="User Image">
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng'); ?> - <?php echo $kota; ?>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default">Profile</a>
                      </div>
                      <div class="pull-right">
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModall">Sign out</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview active">
                <a href="#">
                  <i class="fa fa-search"></i> <span>Lihat Data</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url(); ?>index.php/siswa/datasiswa"><i class="fa fa-circle-o"></i> Profil Siswa</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/siswa/dataguru"><i class="fa fa-circle-o"></i> Absen Siswa</a></li>
                </ul>
              </li>
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <!-- template siswa -->
      <?php elseif ($this->session->userdata('role') == 3): ?>
        <header class="main-header">
          <!-- Logo -->
          <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Bismillah</b></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $foto; ?>" class="user-image" alt="User Image">
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $foto; ?>" class="img-circle" alt="User Image">
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng'); ?> - <?php echo $kelas; ?><br>
                        <small><?php echo $industri; ?>, <?php echo $kota; ?></small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModall">Sign out</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>
      
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
              <a href="#">
                <i class="fa fa-plus"></i> <span>Absensi</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i> <span>Lihat Profil</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/siswa/datasiswa"><i class="fa fa-circle-o"></i> Profilku</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/siswa/dataguru"><i class="fa fa-circle-o"></i> Profil Guru Pembimbing</a></li>
              </ul>
            </li>
          </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <!-- template industri -->
      <?php elseif ($this->session->userdata('role') == 4): ?>
        <header class="main-header">
          <!-- Logo -->
          <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Bismillah</b></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>Industri.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="<?php echo base_url();?>industri.png" class="img-circle" alt="User Image">
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng'); ?>
                        <small><?php echo $kota; ?></small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModall">Sign out</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>
      
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
              <a href="#">
                <i class="fa fa-plus"></i> <span>Absensi</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i> <span>Lihat Profil</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/siswa/datasiswa"><i class="fa fa-circle-o"></i> Profilku</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/siswa/dataguru"><i class="fa fa-circle-o"></i> Profil Guru Pembimbing</a></li>
              </ul>
            </li>
          </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <?php endif; ?>

      <!-- The Modal -->
      <div class="modal fade" role="dialog" id="myModall">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4>
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <strong>Are you sure you want to log-off?</strong>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <a href="<?php base_url(); ?>logout" class="btn btn-danger btn-block">Sign out</a>
                </div>
            </div>
          </div>
      </div>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <?php $this->load->view($main_view) ?>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="<?php echo base_url(); ?>bower_components/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url(); ?>bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(); ?>dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
  <!-- bootstrap notify -->
  <script src="<?php echo base_url() ?>dist/js/bootstrap-notify.js"></script>
  <!-- Data tables -->
  <script src="<?php echo base_url(); ?>dist/dataTables/datatables.min.js"></script>
  <script>
    $(function () {
      $('#dataTables-guru').DataTable();
      $('#dataTables-siswa').DataTable();
      $('#dataTables-industri').DataTable();
    })
  </script>

  <!-- bootstrap notify -->
  <script type="text/javascript">
    <?php
      $notif = $this->session->flashdata('notif'); 
      if (!empty($notif)) {
        if ($notif == 'Berhasil menambahkan data siswa') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Succes!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menambahkan data siswa') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Lengkapi semua field') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menambahkan data guru') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menambahkan data guru') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menghapus data siswa') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menghapus data siswa') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menghapus data guru') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menghapus data guru') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah data guru') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah data siswa') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil absen') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal absen') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'The Kegiatan Prakerin field must be at least 10 characters in length.') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 50,
            type: 'warning',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menambah data industri') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menambah data industri') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Lengkapi Field') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menghapus data industri') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menghapus data industri') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php }
      } 
    ?>
  </script>
  </body>
</html>