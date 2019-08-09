<?php 

  @session_start();
  
  include '../config/koneksi.php';
  @$tampil = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tbl_user WHERE username = '$_SESSION[siswa]'"));

  if(isset($_SESSION['pos']))
  {
    $sebutkan = $_SESSION['pos']['sebutkan'];
  }else{
    $sebutkan = '';
  }

  if(isset($_POST['simpan']))
  {

     // Session Kuesioner

    $_SESSION['sebutkan'] = $_POST['keterangan'];

     // $sebutkan = $_POST['sebutkan'];
     
     $_SESSION['alergi'] = $_POST['satu'];
     $_SESSION['obat'] = $_POST['dua'];
     $_SESSION['geger'] = $_POST['tiga'];
     $_SESSION['kejang'] = $_POST['empat'];
     $_SESSION['pingsan'] = $_POST['lima'];
     $_SESSION['tranfusi'] = $_POST['enam'];
     $_SESSION['kelainan'] = $_POST['tujuh'];
     $_SESSION['penyakit_lainnya'] = $_POST['delapan'];
     $_SESSION['catatan_imunisasi'] = $_POST['sembilan'];
     $_SESSION['bayi'] = $_POST['sepuluh'];
     $_SESSION['kelas1'] = $_POST['sebelas'];
     $_SESSION['kelas2'] = $_POST['duabelas'];
     $_SESSION['kelas3'] = $_POST['tigabelas'];
     $_SESSION['tbc'] = $_POST['empatbelas'];
     $_SESSION['diabetes'] = $_POST['limabelas'];
     $_SESSION['hepatitis'] = $_POST['enambelas'];
     $_SESSION['asma'] = $_POST['tujuhbelas'];
     $_SESSION['penyakit_jantung'] = $_POST['delapanbelas'];
     $_SESSION['stroke'] = $_POST['sembilanbelas'];
     $_SESSION['obesitas'] = $_POST['duapuluh'];
     $_SESSION['tekanan_darah'] = $_POST['duasatu'];
     $_SESSION['kanker_tumor'] = $_POST['duadua'];
     $_SESSION['anemia'] = $_POST['duatiga'];
     $_SESSION['thalasemia'] = $_POST['duaempat'];
     $_SESSION['hemofilia'] = $_POST['dualima'];
     $_SESSION['sarapan'] = $_POST['duaenam'];
     $_SESSION['jajan'] = $_POST['duatujuh'];
     $_SESSION['risiko_merokok'] = $_POST['duadelapan'];
     $_SESSION['risiko_minum'] = $_POST['duasembilan'];
     $_SESSION['pubertas'] = $_POST['tigapuluh'];
     $_SESSION['ims'] = $_POST['tigasatu'];
     $_SESSION['seksual'] = $_POST['tigadua'];
     $_SESSION['menstruasi'] = $_POST['tigatiga'];
     $_SESSION['emosional'] = $_POST['tigaempat'];
     $_SESSION['perilaku'] = $_POST['tigalima'];
     $_SESSION['hiperaktifitas'] = $_POST['tigaenam'];
     $_SESSION['teman_sebaya'] = $_POST['tigatujuh'];
     $_SESSION['proposial'] = $_POST['tigadelapan'];
     $_SESSION['visual'] = $_POST['tigasembilan'];
     $_SESSION['audio'] = $_POST['empatpuluh'];
     $_SESSION['kinestetik'] = $_POST['empatsatu'];
     $_SESSION['dominan_otak'] = $_POST['empatdua'];

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
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../dist/img/avatar/avatar-1.png" width="30" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo @$tampil['nama_lengkap']; ?></div></a>
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
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?menu=index">Dashboard</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>SMK Wikrama Bogor - Input Kuesioner</h1>
          </div>
          
          <?php  

            include '../config/koneksi.php';
            include '../library/controllers.php';
            // $perintah=new oop();

            if(isset($_POST['simpan']))
            {


              $sql =  "INSERT INTO tbl_kuesioner values(NULL,'$_POST[nis]','$_POST[nama]','$_POST[rombel]','$_POST[rayon]')";
              $query = mysqli_query($con, $sql);
              if($query){
                echo "<script>alert('Berhasil Tambah Data');document.location.href='?menu=input_kuesioner'</script>";
              }else{
                echo "<script>alert('Gagal Tambah Data');document.location.href='?menu=input_kuesioner'</script>";
              }
            }


          ?>

<div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Kuesioner Tingkat SMK 2019</h4>
                  </div>
                  <fieldset>
                  <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                       <label for="nis">Nis</label>
                       <input type="number" name="nis" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                       <label for="nama">Nama Lengkap</label>
                       <input type="text" name="nama" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                       <label for="rombel">Rombel</label>
                       <input type="text" name="rombel" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                       <label for="rayon">Rayon</label>
                       <input type="text" name="rayon" class="form-control" required autocomplete="off">
                    </div>
                  </div>
                  </fieldset>
                  
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td colspan="4">I. Pemeriksaan Berdasarkan kuesioner</td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">A. Riwayat Kesehatan Anak</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>
                         Tidak
                      </td>
                      <td>
                         Ya
                      </td>
                      <!-- <td>
                        Sebutkan
                      </td> -->
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td>
                        Alergi Makanan Tertentu
                      </td>
                      <td>
                        
                        <input type="radio" checked="checked" name="satu" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="satu" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Alergi Obat Tertentu
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="dua" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="dua" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Pernah mengalami cedera serius akibat kecelakaan
                        (geger otak/patah tulang/lainnya) 
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tiga" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tiga" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Riwayat kejang berulang
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="empat" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="empat" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Riwayat pingsan
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="lima" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="lima" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Riwayat tranfusi darah berulang
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="enam" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="enam" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Riwayat kelainan bawaan yang dimiliki
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tujuh" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tujuh" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Riwayat penyakit lainnya
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="delapan" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="delapan" value="Ya">
                      </td>
                    </tr>
                  </table>

                  <!-- Riwayat Imunisasi -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">B. Riwayat Imunisasi</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>
                         Tidak
                      </td>
                      <td>
                         Ya
                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td>
                        Memiliki catatan imunisasi
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="sembilan" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="sembilan" value="Ya">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Saat bayi mendapat imunisasi
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="sepuluh" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="sepuluh" value="Ya">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Saat SD kelas 1 mendapat imunisasi
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="sebelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="sebelas" value="Ya">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Saat SD kelas 2 mendapat imunisasi
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duabelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duabelas" value="Ya">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Saat SD kelas 3 mendapat imunisasi
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigabelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigabelas" value="Ya">
                      </td>
                    </tr>


                  </table>

                  <!-- Riwayat kesehatan keluarga -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">C. Riwayat Kesehatan Keluarga</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>
                         Tidak
                      </td>
                      <td>
                         Ya
                      </td>
                      <td>
                        Tidak Tahu
                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td>
                        Tuberkulosis(TBC)
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="empatbelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="empatbelas" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="empatbelas">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Diabetes Mellitus
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="limabelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="limabelas" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="limabelas">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Hepatitis/sakit kuning
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="enambelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="enambelas" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="enambelas">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Asma/bengek
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tujuhbelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tujuhbelas" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="tujuhbelas">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Penyakit jantung
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="delapanbelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="delapanbelas" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="delapanbelas">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Stroke/lumpuh
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="sembilanbelas" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="sembilanbelas" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="sembilanbelas">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Obesitas/gemuk sekali
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duapuluh" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duapuluh" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="duapuluh">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Tekanan darah tinggi
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duasatu" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duasatu" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="duasatu">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Kanker tumor ganas
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duadua" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duadua" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="duadua">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Anemia
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duatiga" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duatiga" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="duatiga">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Thalasemia
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duaempat" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duaempat" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="duaempat">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Hemofilia
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="dualima" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="dualima" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="dualima">
                      </td>
                    </tr>
                  </table>

                  <!-- Gaya Hidup -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">D. Gaya Hidup</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>
                         Selalu
                      </td>
                      <td>
                         Kadang
                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td>
                        Sarapan
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duaenam" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duaenam" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Jajan
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duatujuh" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duatujuh" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Risiko merokok
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duadelapan" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duadelapan" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Risiko minum minuman beralkohol dan Napza
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="duasembilan" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="duasembilan" value="Ya">
                      </td>
                    </tr>
                  </table>

                  <!-- Kesehatan Reproduksi -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">E. Kesehatan Reproduksi</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>
                         Tidak
                      </td>
                      <td>
                         Ya
                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td>
                        Masalah pubertas
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigapuluh" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigapuluh" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Risiko IMS
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigasatu" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigasatu" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Risiko kekerasan seksual
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigadua" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigadua" value="Ya">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Gangguan menstruasi
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigatiga" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigatiga" value="Ya">
                      </td>
                    </tr>
                  </table>

                  <!-- Kesehatan mental emosional skor kesulitan -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">F. Kesehatan Mental Emosional Skor Kesulitan</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>
                         Normal
                      </td>
                      <td>
                         Borderline
                      </td>
                      <td>
                        Abnormal
                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td>
                        Gejala emosional (E)
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigaempat" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigaempat" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="tigaempat">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Masalah perilaku (C)
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigalima" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigalima" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="tigalima">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Hiperaktifitas (H)
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigaenam" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigaenam" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="tigaenam">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Masalah teman sebaya (P)
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigatujuh" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigatujuh" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="tigatujuh">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Perilaku proposial (Pr)
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigadelapan" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigadelapan" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="tigadelapan">
                      </td>
                    </tr>
                  </table>

                  <!-- Kesehatan intelegensia -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">G. Kesehatan Intelegensia</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>
                         Optimal
                      </td>
                      <td>
                         Cukup Optimal
                      </td>
                      <td>
                        Belum Optimal
                      </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td>
                        Visual
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="tigasembilan" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="tigasembilan" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="tigasembilan">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Audio
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="empatpuluh" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="empatpuluh" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="empatpuluh">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Kinestetik
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="empatsatu" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="empatsatu" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="empatsatu">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Dominasi otak
                      </td>
                      <td>
                        <input type="radio" checked="checked" name="empatdua" value="Tidak">
                      </td>
                      <td>
                        <input type="radio" name="empatdua" value="Ya">
                      </td>
                      <td>
                        <input type="radio" name="empatdua">
                      </td>
                    </tr>
                  </table>

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block"  value="Simpan Data" name="simpan">
                  </div>

                </div>
                </div>


              </div>
            </div>
</form>

          



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
  <script src="../dist/modules/moment.min.js"></script>
  <script src="../dist/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
</body>
</html>