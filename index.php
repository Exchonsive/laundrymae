<?php 
session_start();
if ( !isset($_SESSION['username']) ) {
    header('location:login.php'); 
}
else { 
    $username = $_SESSION['username']; 
}
require_once('koneksi.php');
$login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username = '$username'");
$hasil = mysqli_fetch_assoc($login);
if (empty($hasil['username'])) {
    header('Location: login.php');
}
function TanggalIndo($date){
  $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
  $tahun = substr($date, 0, 4);
  $bulan = substr($date, 5, 2);
  $tgl   = substr($date, 8, 2);
 
  $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;   
  return($result);
}
$timezone = "Asia/Jakarta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$date=date('Y-m-d');
@ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="images/logo2.png">
  <title>Laundrymae</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Google Font -->
  <style type="text/css">
    .skin-blue-light .main-header .navbar {
      background-color: #6dbdeb;
    }

    .skin-blue-light .main-header .logo {
      background-color: #6dbdeb;
      color: #fff;
      border-bottom: 0 solid transparent;
    }

    .skin-blue-light .main-header .logo:hover {
      background-color: #3c8dbc;
    }

    .skin-blue-light .main-header .navbar .sidebar-toggle:hover {
      background-color: #3c8dbc;
    }
  </style>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="images/logo2.png" class="user-image" alt="User Image"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> <img src="images/logo.png" class="user-image" alt="User Image"></span>
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
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $hasil['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <li><a href="index.php?page=dasbor"><i class="fa fa-home"></i> <span>Halaman Utama</span></a></li>
        <li><a href="index.php?page=lndry"><i class="fa fa-table"></i> <span>Laundry</span></a></li>
        <li><a href="index.php?page=tmbhk"><i class="fa fa-user-plus"></i> <span>Tambah Konsumen</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-list"></i>
            <span>Lihat Data</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=jenis"><i class="fa fa-circle-o"></i> <span>Jenis Laundry</span></a></li>
            <li><a href="index.php?page=datako"><i class="fa fa-circle-o"></i> <span>Konsumen</span></a></li>
            <li><a href="index.php?page=datas"><i class="fa fa-circle-o"></i> <span>Supplier</span></a></li>
            <li><a href="index.php?page=barang"><i class="fa fa-circle-o"></i> <span>Barang</span></a></li>
            <li><a href="index.php?page=beli"><i class="fa fa-circle-o"></i> <span>Pembelian Barang</span></a></li>
            <li><a href="index.php?page=pakai"><i class="fa fa-circle-o"></i> <span>Pemakaian Barang</span></a></li>
          </ul>
        </li>
        
        <?php if ($hasil['level']!=='Karyawan') { ?>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i>
            <span> Fitur Admin </span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=krywn"><i class="fa fa-circle-o"></i> <span>Pengguna</span></a></li>
            <li><a href="index.php?page=spplr"><i class="fa fa-circle-o"></i> <span>Supplier</span></a></li>
          </ul>
        </li>  
        <?php } ?>
        <li><a href="logout.php" onclick="return confirm('Logout dari akun ini?');"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <?php include "wrapper.php"; ?>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.2 Beta
    </div>
    <strong>Copyright &copy; 2019 Laundrymae</strong>. All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- bootstrap datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  $('#datepicker').datepicker({
      autoclose: true,
      format:'yyyy-mm-dd'
    })
  $('#datepicker2').datepicker({
      autoclose: true,
      format:'yyyy-mm-dd'
    })
  })

</script>
</body>
</html>
