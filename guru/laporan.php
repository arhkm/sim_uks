<?php 

  @session_start();
  
  include '../config/koneksi.php';
  @$tampil = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tbl_user WHERE username = '$_SESSION[guru]'"));


?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIM UKS</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../dist/css/style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../dist/img/avatar/avatar-1.png" width="30" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo @$tampil['username']; ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="#" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="#" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="#" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">SIM UKS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard-index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Guru</li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i class="fas fa-th"></i> <span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Kuesioner</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="kuesioner.php">Data Siswa</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Data Siswa Sakit</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="input_siswa.php">Input Siswa</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Laporan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="laporan.php">Report UKS</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Laporan Siswa Sakit</h1>
          </div>
          
          

          <div class="row">
            <div class="col-sm-12">
              <!-- <link rel="stylesheet" type="text/css" href="../dist/data-table/style2.css"> -->
            <div class="card">
              <div class="card-header">
                <a href="export_siswa.php" target="_blank" class="btn btn-primary">Cetak Data</a>
              </div>
               <div class="card-body">
                 <table class="table table-bordered table-striped table-hover" id="#table">
                   <thead>
                     <tr>
                       <td>No</td>
                       <td>Nis</td>
                       <td>Nama Lengkap</td>
                       <td>Rombel</td>
                       <td>Rayon</td>
                       <td>Keterangan</td>
                       <td>Tanggal</td>
                     </tr>
                   </thead>
                   <tbody>
                   <?php  

                      include '../config/koneksi.php';

                      date_default_timezone_set('Asia/Jakarta');

                      $tanggal = date('d-m-Y');

                      $no = 1;
                      $query = mysqli_query($con, "SELECT * FROM tbl_siswa");
                      while($data = mysqli_fetch_assoc($query)){

                      if(isset($_GET['hapus']))
                      {
                        $sql = mysqli_query($con, "DELETE FROM tbl_siswa WHERE nis = '$_GET[nis]'");
                        $cek = mysqli_num_rows($sql);
                        if($cek)
                        {
                          echo "berhasil";
                        }else{
                          echo "gagal";
                        }
                      }

                    ?>
                   
                   <tr>
                     <td><?php echo $no++ ?></td>
                     <td><?php echo $data['nis'] ?></td>
                     <td><?php echo $data['nama_lengkap'] ?></td>
                     <td><?php echo $data['rombel'] ?></td>
                     <td><?php echo $data['rayon'] ?></td>
                     <td><?php echo $data['keterangan'] ?></td>
                     <td><?php echo $tanggal; ?></td>
                     </tr>
                    <?php } ?>
                   
                 </tbody>
               </table>
               </div>
            </div>
            </div>
          </div>
          </div>                    
          </div>


          <div class="section-body">
          <?php  

            switch (@$_GET['menu']) {
              case "lap":
                include "laporan.php";
                break;
              case "input_siswa":
                include "input_siswa.php";
                break;
                
              
              
            }

          ?>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; Arief Rahman Hakim GEN-14 RPL
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/datatables/datatables.min.js"></script>
  <!-- <script src="../dist/data-table/datatable.js"></script>
  <script src="../dist/data-table/datatableButton.js"></script>
  <script src="../dist/data-table/flash.js"></script>
  <script src="../dist/data-table/html5.js"></script>
  <script src="../dist/data-table/jzip.js"></script>
  <script src="../dist/data-table/pdf.js"></script>
  <script src="../dist/data-table/print.js"></script>
  <script src="../dist/data-table/select2.js"></script>
  <script src="../dist/data-table/vfs.js"></script> -->
  <script src="../dist/modules/moment.min.js"></script>
  <script src="../dist/js/stisla.js"></script>
  <script type="text/javascript">
    $(".table").DataTable();
  </script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
</body>
</html>