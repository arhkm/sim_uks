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

            $query1 = mysqli_query($con,"select * from tbl_detail_kuesioner WHERE id_kuesioner = '$_GET[id_kuesioner]' ");
            $data_kuesioner  = mysqli_fetch_assoc($query1);

            $response = json_decode($data_kuesioner['kuesioner'], true);
            // echo "<pre>";
            // print_r($response['tahapI']['bagianA']);
            // echo "</pre>";

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
                      <td style="font-weight:bold; font-size:18px;">A. Riwayat Kesehatan Anak</td>
                      <td style="font-weight:bold; font-size:18px;">Keterangan</td>
                    </tr>
                		<tr>
                			<td>Alergi Makanan Tertentu</td>
                			<td>

                        <?php
                          foreach ($response['tahapI']['bagianA']['alergi'] as $key => $value) {
                            echo $value." ";
                          }
                         ?>

                			</td>
                		</tr>
                    <tr>
                      <td>Alergi Obat Tertentu</td>
                      <td>

                        <?php
                          foreach ($response['tahapI']['bagianA']['obat'] as $key => $value) {
                            echo $value." ";
                          }
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Pernah mengalami cedera serius akibat kecelakaan
                        (geger otak/patah tulang/lainnya)</td>
                      <td>

                        <?php
                          foreach ($response['tahapI']['bagianA']['geger'] as $key => $value) {
                            echo $value." ";
                          }
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat kejang berulang</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianA']['kejang'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat pingsan</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianA']['pingsan'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat tranfusi darah berulang</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianA']['transfusi'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat kelainan bawaan yang dimiliki</td>
                      <td>

                        <?php
                          foreach ($response['tahapI']['bagianA']['kelainan'] as $key => $value) {
                            echo $value." ";
                          }
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Riwayat penyakit lainnya</td>
                      <td>

                        <?php
                          foreach ($response['tahapI']['bagianA']['penyakit_lainnya'] as $key => $value) {
                            echo $value." ";
                          }
                         ?>

                      </td>
                    </tr>

                    <!-- Riwayat Imunisasi -->
                    <tr>
                      <td style="font-weight:bold; font-size:18px;" style="font-weight:bold; font-size:18px;">B . Riwayat Imunisasi</td>
                      <td style="font-weight:bold; font-size:18px;" style="font-weight:bold; font-size:18px;">Keterangan</td>
                    </tr>
                    <tr>
                      <td>Memiliki catatan imunisasi</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianB']['catatan_imunisasi'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Saat bayi mendapat imunisasi</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianB']['bayi'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Saat SD kelas 1 mendapat imunisasi</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianB']['kelas1SD'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Saat SD kelas 2 mendapat imunisasi</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianB']['kelas2SD'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Saat SD kelas 3 mendapat imunisasi</td>
                      <td>

                        <?php
                            echo $response['tahapI']['bagianB']['kelas3SD'];
                         ?>

                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan Keluarga -->
                    <tr>
                      <td style="font-weight:bold; font-size:18px;">C. Riwayat Kesehatan Keluarga</td>
                      <td style="font-weight:bold; font-size:18px;">Keterangan</td>
                    </tr>
                    <tr>
                      <td>Tuberkulosis(TBC)</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['tbc'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Diabetes Mellitus</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['diabetes'];
                         ?>

                      </td>
                    </tr>
                    <tr>
                      <td>Hepatitis/sakit kuning</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['hepatitis'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Asma/bengek</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['asma'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Penyakit jantung</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['penyakit_jantung'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Stroke/lumpuh</td>
                      <td><?php
                          echo $response['tahapI']['bagianC']['stroke'];
                       ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Obesitas/gemuk sekali</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['obesitas'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Tekanan darah tinggi</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['tekanan_darah'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Kanker tumor ganas</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['kanker_tumor'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Anemia</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['anemia'];
                         ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Thalasemia</td>
                      <td>
                         <?php
                             echo $response['tahapI']['bagianC']['thalasemia'];
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Hemofilia</td>
                      <td>
                        <?php
                            echo $response['tahapI']['bagianC']['hemofilia'];
                         ?>
                      </td>
                    </tr>

                    <!-- Gaya Hidup -->
                    <tr>
                      <td style="font-weight:bold; font-size:18px;">D. Gaya Hidup</td>
                      <td style="font-weight:bold; font-size:18px;">Keterangan</td>
                    </tr>
                       <tr>
                        <td>Sarapan</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianD']['sarapan'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Jajan</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianD']['jajan'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko merokok</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianD']['risiko_merokok'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko minum minuman beralkohol dan Napza</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianD']['risiko_minum'];
                           ?>
                        </td>
                      </tr>

                      <!-- Kesehatan Reproduksi -->
                      <tr>
                        <td style="font-weight:bold; font-size:18px;">E. Kesehatan Reproduksi</td>
                        <td style="font-weight:bold; font-size:18px;">Keterangan</td>
                      </tr>
                      <tr>
                        <td>Masalah Pubertas</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianE']['pubertas'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko IMS</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianE']['risiko_ims'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Risiko kekerasan seksual</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianE']['kekerasan_seksual'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Gangguan menstruasi</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianE']['gangguan_menstruasi'];
                           ?>
                        </td>
                      </tr>

                      <tr>
                        <td style="font-weight:bold; font-size:18px;">F. Kesehatan Mental Emosional Skor Kesulitan</td>
                        <td style="font-weight:bold; font-size:18px;">Keterangan</td>
                      </tr>

                      <tr>
                        <td>Gejala emosional (E)</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianF']['gejala_emosional'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Masalah perilaku (C)</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianF']['masalah_perilaku'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Hiperaktifitas (H)</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianF']['hiperaktifitas'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Masalah teman sebaya (P)</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianF']['teman_sebaya'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Perilaku proposial (Pr)</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianF']['perilaku_prososial'];
                           ?>
                        </td>
                      </tr>

                      <tr>
                        <td style="font-weight:bold; font-size:18px;">G. Kesehatan Intelegensia</td>
                        <td style="font-weight:bold; font-size:18px;">Keterangan</td>
                      </tr>
                      <tr>
                        <td>Visual</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianG']['visual'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Audio</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianG']['audio'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Kinestetik</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianG']['kinestetik'];
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Dominasi otak</td>
                        <td>
                          <?php
                              echo $response['tahapI']['bagianG']['dominan_otak'];
                           ?>
                        </td>
                      </tr>



                	</thead>
                </table>
                <table class="table table-bordered">
                  <h3>Laporan Pemeriksaan Fisik</h3>
                  <thead>
                    <tr>
                      <td style="font-weight:bold; font-size:18px;">B. Pemeriksaan Status Gizi</td>
                      <td style="font-weight:bold; font-size:18px;">Keterangan</td>
                    </tr>
                    <tr>
                      <td> Berat badan</td>
                      <td>
                        <?php
                          echo $response['tahapII']['bagianB']['berat_badan'];
                        ?>&nbsp; Kg
                     </td>
                    </tr>
                    <tr>
                      <td> Tinggi badan</td>
                      <td>
                        <?php
                          echo $response['tahapII']['bagianB']['tinggi_badan'];
                        ?>&nbsp; Cm
                      </td>
                    </tr>
                    <tr>
                      <td> IMT </td>
                      <td>
                        <?php
                          echo $response['tahapII']['bagianB']['indeks_masa_tubuh'];
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td> Kategori </td>
                      <td>
                        <?php
                          echo $response['tahapII']['bagianB']['kategori_imt'];
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
