<?php 
  
  error_reporting(0);
  @session_start();
	

  include '../fpdf/fpdf.php';

  if(isset($_POST['cetak']))
  {
  	 header('Location:cetak.php');
  }

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
            <!-- <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li> -->
            <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          
        </ul>
      </nav>
      <!-- <div class="main-sidebar"> -->
        <!-- <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">SIM UKS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard-index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?menu=index">Dashboard</a></li>
              </ul>
            </li>
          </ul>
        </aside> -->
      <!-- </div> -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="col-md-12">
          <div class="section-header">
            <h1>Data Kuesioner Siswa</h1>
          </div>
          </div>
          
          <?php  

            include '../config/koneksi.php';
            // include '../library/controllers.php';
            // // $perintah=new oop();

            // if(isset($_POST['simpan']))
            // {
            //   $sql =  "INSERT INTO tbl_kuesioner values(NULL,'$_POST[nis]','$_POST[nama]','$_POST[rombel]','$_POST[rayon]')";
            //   $query = mysqli_query($con, $sql);
            //   if($query){
            //     echo "<script>alert('Berhasil Tambah Data');document.location.href='?menu=input_kuesioner'</script>";
            //   }else{
            //     echo "<script>alert('Gagal Tambah Data');document.location.href='?menu=input_kuesioner'</script>";
            //   }

            // }
            $query = mysqli_query($con,"select * from tbl_kuesioner WHERE id_kuesioner = '$_GET[id_kuesioner]' ");
            $data  = mysqli_fetch_assoc($query);

          ?>

<div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        	<div class="card">
        		<div class="card-body">
        		<form method="post">
                <table class="table table-bordered">
                	<thead>
                		<tr>
                			<td>Nis </td>
                			<td><?php echo $data['nis'] ?></td>
                		</tr>
                		<tr>
                			<td>Nama Lengkap</td>
                			<td><?php echo $data['nama_lengkap'] ?></td>
                		</tr>
                		<tr>
                			<td>Rombel</td>
                			<td><?php echo $data['rombel'] ?></td>
                		</tr>
                		<tr>
                			<td>Rayon</td>
                			<td><?php echo $data['rayon'] ?></td>
                		</tr>
                		
                	</thead>
                </table>

                <table class="table table-bordered">
                	<h3>Laporan Kuesioner</h3>
                	<thead>
                    <tr>
                      <td>A. Riwayat Kesehatan Anak</td>
                      <td>Keterangan</td>
                    </tr>
                		<tr>
                			<td>Alergi Makanan Tertentu</td>
                			<td>
                				
                				<?php 
                				   if($_SESSION['alergi'] != ""){
                				   	 	echo @$_SESSION['alergi'];
                				   } 
                				 ?>
                					
                			</td>
                		</tr>
                    <tr>
                      <td>Alergi Obat Tertentu</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['obat'] != ""){
                              echo $_SESSION['obat'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Pernah mengalami cedera serius akibat kecelakaan
                        (geger otak/patah tulang/lainnya)</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['geger'] != ""){
                              echo @$_SESSION['geger'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat kejang berulang</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['kejang'] != ""){
                              echo @$_SESSION['kejang'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat pingsan</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['pingsan'] != ""){
                              echo @$_SESSION['pingsan'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat tranfusi darah berulang</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['tranfusi'] != ""){
                              echo @$_SESSION['tranfusi'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat kelainan bawaan yang dimiliki</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['kelainan'] != ""){
                              echo @$_SESSION['kelainan'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat penyakit lainnya</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['penyakit_lainnya'] != ""){
                              echo @$_SESSION['penyakit_lainnya'];
                           } 
                         ?>
                          
                      </td>
                    </tr>

                    <!-- Riwayat Imunisasi -->
                    <tr>
                      <td>B . Riwayat Imunisasi</td>
                      <td>Keterangan</td>
                    </tr>
                    <tr>
                      <td>Memiliki catatan imunisasi</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['catatan_imunisasi'] != ""){
                              echo @$_SESSION['catatan_imunisasi'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Saat bayi mendapat imunisasi</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['bayi'] != ""){
                              echo @$_SESSION['bayi'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Saat SD kelas 1 mendapat imunisasi</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['kelas1'] != ""){
                              echo @$_SESSION['kelas1'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Saat SD kelas 2 mendapat imunisasi</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['kelas2'] != ""){
                              echo @$_SESSION['kelas2'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Saat SD kelas 3 mendapat imunisasi</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['kelas3'] != ""){
                              echo @$_SESSION['kelas3'];
                           } 
                         ?>
                          
                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan Keluarga -->
                    <tr>
                      <td>C. Riwayat Kesehatan Keluarga</td>
                      <td>Keterangan</td>
                    </tr>
                    <tr>
                      <td>Tuberkulosis(TBC)</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['tbc'] != ""){
                              echo @$_SESSION['tbc'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Diabetes Mellitus</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['diabetes'] != ""){
                              echo @$_SESSION['diabetes'];
                           } 
                         ?>
                          
                      </td>
                    </tr>                                      
                    <tr>
                      <td>Hepatitis/sakit kuning</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['hepatitis'] != ""){
                              echo @$_SESSION['hepatitis'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Asma/bengek</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['asma'] != ""){
                              echo @$_SESSION['asma'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Penyakit jantung</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['penyakit_jantung'] != ""){
                              echo @$_SESSION['penyakit_jantung'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Stroke/lumpuh</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['stroke'] != ""){
                              echo @$_SESSION['stroke'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Obesitas/gemuk sekali</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['obesitas'] != ""){
                              echo @$_SESSION['obesitas'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Tekanan darah tinggi</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['tekanan_darah'] != ""){
                              echo @$_SESSION['tekanan_darah'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Kanker tumor ganas</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['kanker_tumor'] != ""){
                              echo @$_SESSION['kanker_tumor'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Anemia</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['anemia'] != ""){
                              echo @$_SESSION['anemia'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Thalasemia</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['thalasemia'] != ""){
                              echo @$_SESSION['thalasemia'];
                           } 
                         ?>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Hemofilia</td>
                      <td>
                        
                        <?php 
                           if($_SESSION['hemofilia'] != ""){
                              echo @$_SESSION['hemofilia'];
                           } 
                         ?>
                          
                      </td>
                    </tr>

                    <!-- Gaya Hidup -->
                    <tr>
                      <td>D. Gaya Hidup</td>
                      <td>Keterangan</td>
                    </tr>
                       <tr>
                        <td>Sarapan</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['sarapan'] != ""){
                                echo @$_SESSION['sarapan'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Jajan</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['jajan'] != ""){
                                echo @$_SESSION['jajan'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko merokok</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['risiko_merokok'] != ""){
                                echo @$_SESSION['risiko_merokok'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko minum minuman beralkohol dan Napza</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['risiko_minum'] != ""){
                                echo @$_SESSION['risiko_minum'];
                             } 
                           ?>
                            
                        </td>
                      </tr>

                      <!-- Kesehatan Reproduksi -->
                      <tr>
                        <td>E. Kesehatan Reproduksi</td>
                        <td>Keterangan</td>
                      </tr>
                      <tr>
                        <td>Masalah Pubertas</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['pubertas'] != ""){
                                echo @$_SESSION['pubertas'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko IMS</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['ims'] != ""){
                                echo @$_SESSION['ims'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko kekerasan seksual</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['seksual'] != ""){
                                echo @$_SESSION['seksual'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Gangguan menstruasi</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['menstruasi'] != ""){
                                echo @$_SESSION['menstruasi'];
                             } 
                           ?>
                            
                        </td>
                      </tr>

                      <tr>
                        <td>F. Kesehatan Mental Emosional Skor Kesulitan</td>
                        <td>Keterangan</td>
                      </tr>           

                      <tr>
                        <td>Gejala emosional (E)</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['emosional'] != ""){
                                echo @$_SESSION['emosional'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Masalah perilaku (C)</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['perilaku'] != ""){
                                echo @$_SESSION['perilaku'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Hiperaktifitas (H)</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['hiperaktifitas'] != ""){
                                echo @$_SESSION['hiperaktifitas'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Masalah teman sebaya (P)</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['teman_sebaya'] != ""){
                                echo @$_SESSION['teman_sebaya'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Perilaku proposial (Pr)</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['proposial'] != ""){
                                echo @$_SESSION['proposial'];
                             } 
                           ?>
                            
                        </td>
                      </tr>

                      <tr>
                        <td>G. Kesehatan Intelegensia</td>
                        <td>Keterangan</td>
                      </tr>
                      <tr>
                        <td>Visual</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['visual'] != ""){
                                echo @$_SESSION['visual'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Audio</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['audio'] != ""){
                                echo @$_SESSION['audio'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Kinestetik</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['kinestetik'] != ""){
                                echo @$_SESSION['kinestetik'];
                             } 
                           ?>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Dominasi otak</td>
                        <td>
                          
                          <?php 
                             if($_SESSION['dominan_otak'] != ""){
                                echo @$_SESSION['dominan_otak'];
                             } 
                           ?>
                            
                        </td>
                      </tr>

                        
                    
                	</thead>
                </table>

                <h3>Tanda Tangan</h3>

                <table class="table table-bordered">
                  <tr>
                    <td>Guru UKS</td>
                    <td>Pembimbing Rayon</td>
                    <td>Rujuk / Tidak Rujuk</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>

  
               	<a href="export_kuesioner.php?nis=<?php echo $data['nis'] ?>" target="_blank" class="btn btn-success" onclick="window.print()">Cetak Data</a>
                </div>
                </form>
            </div>    
        </div>
</div>

      </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <!-- Copyright &copy; Arief Rahman Hakim GEN-14 RPL -->
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
  <script src="../dist/modules/moment.min.js"></script>
  <script src="../dist/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
</body>
</html>
