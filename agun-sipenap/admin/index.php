<?php 
  session_start();
  $koneksi = new mysqli("localhost", "root", "", "db_sipenap");

  if (!isset($_SESSION['admin'])) 
  {
    echo "<script>alert('Anda harus login!')</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website SIPENAP</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
  
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          SIPENAP
          <p>Sistem Informasi </p>
        </a>
      </div>
      <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
        <!-- waktu saat ini -->
        <?php
          $tanggal= mktime(date("m"),date("d"),date("Y"));
          echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
          date_default_timezone_set('Asia/Jakarta');
          $jam=date("H:i:s");
          echo "| Pukul : <b>". $jam." "."</b>";
          $a = date ("H");
          if (($a>=6) && ($a<=11)){
          echo "<b>, Selamat Pagi !!</b>";
          }
          else if(($a>11) && ($a<=15))
          {
          echo ", Selamat Pagi !!";}
          else if (($a>15) && ($a<=18)){
          echo ", Selamat Siang !!";}
          else { echo ", <b> Selamat Malam </b>";}
        ?> 
        <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> 
      </div>
    </nav>   
    
    <!-- /. Navigasi Atas  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
          <li><a  href="index.php"><i class="fa fa-dashboard fa-2x"></i> Home</a></li>
          <li><a  href="index.php?halaman=administrator"><i class="fa fa-dashboard fa-2x"></i> Administator</a></li>
          <li><a  href="index.php?halaman=narkotika"><i class="fa fa-dashboard fa-2x"></i> Narkotika</a></li>
          <li><a  href="index.php?halaman=psikotropika"><i class="fa fa-dashboard fa-2x"></i> Psikotropika</a></li>
          <li><a  href="index.php?halaman=zat_adiktif"><i class="fa fa-dashboard fa-2x"></i> Zat-Adiktif</a></li>
          <li><a  href="index.php?halaman=logout"><i class="fa fa-dashboard fa-2x"></i> Logout</a></li>
        </ul>
      </div>
    </nav>
    
    <!-- /. Navigasi Sidebar  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <?php 
          if(isset($_GET['halaman']))
          {
            // script untuk menampilkan seluruh data pada masing-masing tabel
            if ($_GET['halaman'] == 'administrator') {
              include 'administrator.php';
            }
            elseif ($_GET['halaman'] == "narkotika")
            {
              include 'narkotika.php';
            }
            elseif ($_GET['halaman'] == "psikotropika")
            {
              include 'psikotropika.php';
            }
            elseif ($_GET['halaman'] == "zat_adiktif")
            {
              include 'zat_adiktif.php';
            }
            elseif ($_GET['halaman'] == 'logout') 
            { 
              include 'logout.php';
            }

            // script untuk tambah data
            elseif ($_GET['halaman'] == "tambah_admin")
            {
              include 'tambah_admin.php';
            }
            elseif ($_GET['halaman'] == "tambah_narkotika")
            {
              include 'tambah_narkotika.php';
            }
            elseif ($_GET['halaman'] == "tambah_psikotropika")
            {
              include 'tambah_psikotropika.php';
            }
            elseif ($_GET['halaman'] == "tambah_zat_adiktif")
            {
              include 'tambah_zat_adiktif.php';
            }

            // script untuk hapus data
            elseif ($_GET['halaman'] == 'hapus_admin') 
            {
              include 'hapus_admin.php';
            }
            elseif ($_GET['halaman'] == 'hapus_narkotika') 
            {
              include 'hapus_narkotika.php'; 
            }
            elseif ($_GET['halaman'] == 'hapus_psikotropika') 
            {
              include 'hapus_psikotropika.php';
            }
            elseif ($_GET['halaman'] == 'hapus_zat_adiktif') 
            {
              include 'hapus_zat_adiktif.php';
            }

            // script untuk ubah data masing-masing tabel
            elseif ($_GET['halaman'] == 'ubah_admin') 
            {
              include 'ubah_admin.php';
            }
            elseif ($_GET['halaman'] == 'ubah_narkotika') 
            {
              include 'ubah_narkotika.php';
            }
            elseif ($_GET['halaman'] == 'ubah_psikotropika') 
            {
              include 'ubah_psikotropika.php';
            }
            elseif ($_GET['halaman'] == 'ubah_zat_adiktif') 
            {
              include 'ubah_zat_adiktif.php';
            }

          }
          else {
            include 'home.php';
          }
        ?>
      </div>
    </div>
  </div>
  
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>