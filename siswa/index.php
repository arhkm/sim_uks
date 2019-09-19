<?php
  error_reporting(0);
  @session_start();

  include '../config/koneksi.php';
  @$tampil = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tbl_siswa_login WHERE nis = '$_SESSION[nis]'"));

  // if(isset($_SESSION['pos']))
  // {
  //   $sebutkan = $_SESSION['pos']['sebutkan'];
  // }else{
  //   $sebutkan = '';
  // }

  if(isset($_POST['simpan']))
  {

     // Session Kuesioner

    // $_SESSION['sebutkan'] = $_POST['keterangan'];

     // $sebutkan = $_POST['sebutkan'];
     $arr = [];
     $kuesioner = array(
       'tahapI' => array(
         'tahap' => 'I',
         'bagianA' => array(
           'bagian' => 'A',
           'alergi' => array(
             'kuesioner' => $_POST['satu'],
             'sebutkan'  => $_POST['sebutkan_alergi'] ),
           'obat' => array(
             'kuesioner' => $_POST['dua'],
              'sebutkan' => $_POST['sebutkan_obat'] ),
           'geger' => array(
              'kuesioner' => $_POST['tiga'],
              'sebutkan'  => $_POST['sebutkan_geger'] ),
           'kejang' => $_POST['empat'],
           'pingsan' => $_POST['lima'],
           'transfusi' => $_POST['enam'],
           'kelainan' => array(
              'kuesioner' => $_POST['tujuh'],
              'sebutkan'  => $_POST['sebutkan_kelainan'] ),

           'penyakit_lainnya' => array(
              'kuesioner' => $_POST['delapan'],
              'sebutkan'  => $_POST['sebutkan_penyakit_lainnya'] ),
         ),

         'bagianB' => array(
            'bagian' => 'B',
            'catatan_imunisasi' => $_POST['sembilan'],
            'bayi' => $_POST['sepuluh'],
            'kelas1SD' => $_POST['sebelas'],
            'kelas2SD' => $_POST['duabelas'],
            'kelas3SD' => $_POST['tigabelas'],
         ),

         'bagianC' => array(
            'bagian' => 'C',
            'tbc' => $_POST['empatbelas'],
            'diabetes' => $_POST['limabelas'],
            'hepatitis' => $_POST['enambelas'],
            'asma' => $_POST['tujuhbelas'],
            'penyakit_jantung' => $_POST['delapanbelas'],
            'stroke' => $_POST['sembilanbelas'],
            'obesitas' => $_POST['duapuluh'],
            'tekanan_darah' => $_POST['duasatu'],
            'kanker_tumor' => $_POST['duadua'],
            'anemia' => $_POST['duatiga'],
            'thalasemia' => $_POST['duaempat'],
            'hemofilia' => $_POST['dualima'],
         ),

         'bagianD' => array(
            'bagian' => 'D',
            'sarapan' => $_POST['duaenam'],
            'jajan' => $_POST['duatujuh'],
            'risiko_merokok' => $_POST['duadelapan'],
            'risiko_minum' => $_POST['duasembilan'],
         ),

         'bagianE' => array(
            'bagian' => 'E',
            'pubertas' => $_POST['tigapuluh'],
            'risiko_ims' => $_POST['tigasatu'],
            'kekerasan_seksual' => $_POST['tigadua'],
            'gangguan_menstruasi' => $_POST['tigatiga'],
         ),

         'bagianF' => array(
            'bagian' => 'F',
            'gejala_emosional' => $_POST['tigaempat'],
            'masalah_perilaku' => $_POST['tigalima'],
            'hiperaktifitas' => $_POST['tigaenam'],
            'teman_sebaya' => $_POST['tigatujuh'],
            'perilaku_prososial' => $_POST['tigadelapan'],
         ),

         'bagianG' => array(
            'bagian' => 'G',
            'visual' => $_POST['tigasembilan'],
            'audio' => $_POST['empatpuluh'],
            'kinestetik' => $_POST['empatsatu'],
            'dominan_otak' => $_POST['empatdua'],
         ),

       ),
       'tahapII' => array(
         'tahap' => 'II',
         // 'bagianA' => array(
         //    'bagian' => 'A',
         //    'tekanan_darah' => $_POST['empattiga'],
         //    'denyut_nadi' => $_POST['empatempat'],
         //    'frekuensi' => $_POST['empatlima'],
         //    'suhu' => $_POST['empatenam'],
         //    'bising_jantung' => $_POST['empattujuh'],
         //    'bising_paru' => $_POST['empatdelapan'],
         // ),

         'bagianB' => array(
            'bagian' => 'B',
            'berat_badan' => $_POST['empatsembilan'],
            'tinggi_badan' => $_POST['limapuluh'],
            'indeks_masa_tubuh' => $_POST['limasatu'],
            'kategori_imt' => $_POST['limadua'],
            // 'tb/u(stungting)' => $_POST['limatiga'],
            // 'tanda_klinis' => $_POST['limaempat'],
         ),

         // 'bagianC' => array(
         //    'bagian' => 'C',
         //    'rambut' => $_POST['limalima'],
         //    'kulit_bercak' => $_POST['limaenam'],
         //    'kulit_bersisik' => $_POST['limatujuh'],
         //    'kulit_memar' => $_POST['limadelapan'],
         //    'kulit_sayatan' => $_POST['limasembilan'],
         //    'kulit_koreng' => $_POST['enampuluh'],
         //    'kulit_koreng_sukar' => $_POST['enamsatu'],
         //    'kulit_bekas_suntikan' => $_POST['enamdua'],
         //    'kuku' => $_POST['enamtiga'],
         // ),
         //
         // 'bagianD' => array(
         //    'bagian' => 'D',
         //    'mata_luar' => $_POST['enamempat'],
         //    'tajam_penglihatan' => $_POST['enamlima'],
         //    'buta_warna' => $_POST['enamenam'],
         // ),
         //
         // 'bagianE' => array(
         //    'bagian' => 'E',
         //    'telinga_luar' => $_POST['enamtujuh'],
         //    'tajam_pendengaran' => array(
         //      'kuesioner' => $_POST['enamdelapan'],
         //      'lainnya'  => $_POST['ada_gangguan']),
         // ),
         //
         // 'bagianF' => array(
         //    'bagian' => 'F',
         //    'celah_bibir' => $_POST['enamsembilan'],
         //    'luka_sudut_mulut' => $_POST['tujuhpuluh'],
         //    'sariawan' => $_POST['tujuhsatu'],
         //    'lidah_kotor' => $_POST['tujuhdua'],
         //    'luka_lainnya' => array(
         //      'kuesioner' => $_POST['tujuhtiga'],
         //      'lainnya'   => $_POST['IIFlokasi_luka_lainnya']),
         //    'gigi_berlubang' => $_POST['tujuhempat'],
         //    'gusi_berdarah' => $_POST['tujuhlima'],
         //    'gusi_bengkak' => $_POST['tujuhenam'],
         //    'gigi_kotor' => $_POST['tujuhtujuh'],
         //    'karang_gigi' => $_POST['tujuhdelapan'],
         //    'susunan_gigi' => $_POST['tujuhsembilan'],
         // ),
         //
         // 'bagianG' => array(
         //    'bagian' => 'G',
         //    'penglihatan_loupe' => $_POST['delapanpuluh'],
         //    'pendengaran' => $_POST['delapansatu'],
         //    'kursi_roda' => $_POST['delapandua'],
         //    'tongkat' => $_POST['delapantiga'],
         //    'kaki_tangan_mata_protese' => $_POST['delapanempat'],
         // ),
         //
         // 'bagianH' => array(
         //    'bagian' => 'H',
         //    'jumlah_nilai' => $_POST['delapanlima'],
         //    'klarifikasi' => $_POST['delapanenam'],
         // ),

       ),

       // 'tahapIII' => array(
       //   'kesimpulan' => array(
       //     'kesimpulan1' => $_POST['kesimpulan1'],
       //     'kesimpulan2' => $_POST['kesimpulan2']
       //   ),
       // ),
       //
       // 'tahapIV' => array(
       //   'dirujuk' => array(
       //     'kuesioner' => $_POST['rujuk'],
       //     'lainnya' => $_POST['tgl_rujukan']
       //   ),
       // ),

     );

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
            <div class="d-sm-none d-lg-inline-block"><?php echo @$tampil['nama']; ?></div></a>
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

              $nis = $tampil['nis'];
              $nama = $tampil['nama'];
              $rombel = $tampil['rombel'];
              $rayon = $tampil['rayon'];

              $sql =  "INSERT INTO tbl_kuesioner values(NULL,'$nis','$nama','$rombel','$rayon')";
              $query = mysqli_query($con, $sql);
              //
              $sql1 = "SELECT * FROM tbl_kuesioner WHERE nis = '$nis' ";
              $query1 = mysqli_query($con, $sql1);
              while($data = mysqli_fetch_assoc($query1)){
                $id_kuesioner = $data['id_kuesioner'];
                $kuesioner_response = json_encode($kuesioner);
                // echo "result : ",$convert;
                $sql2 = "INSERT INTO tbl_detail_kuesioner values(NULL,'$id_kuesioner','$kuesioner_response')";
                $query2 = mysqli_query($con, $sql2);
              }

              // print_r($query1);
              if($query){
                 // echo "<pre>";
                 // print_r($kuesioner_response);
                 // echo "</pre>";
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
                       <input type="number" name="nis" disabled class="form-control" required autocomplete="off" value="<?php echo $tampil['nis']; ?>">
                    </div>
                    <div class="form-group">
                       <label for="nama">Nama Lengkap</label>
                       <input type="text" name="nama" disabled class="form-control" required autocomplete="off" value="<?php echo $tampil['nama']; ?>">
                    </div>
                    <div class="form-group">
                       <label for="rombel">Rombel</label>
                       <input type="text" name="rombel" disabled class="form-control" required autocomplete="off" value="<?php echo $tampil['rombel']; ?>">
                    </div>
                    <div class="form-group">
                       <label for="rayon">Rayon</label>
                       <input type="text" name="rayon" disabled class="form-control" required autocomplete="off" value="<?php echo $tampil['rayon']; ?>">
                    </div>
                  </div>
                  </fieldset>

                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td colspan="4" style="font-weight: bold;">I. Pemeriksaan Berdasarkan kuesioner</td>
                    </tr>
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">A. Riwayat Kesehatan Anak</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td> Tidak </td>
                      <td> Ya </td>
                      <td> Sebutkan </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td> Alergi Makanan Tertentu </td>
                      <td> <input type="radio" name="satu" value="Tidak"> </td>
                      <td> <input type="radio" name="satu" value="Ya"></td>
                      <td> <input type="text" name="sebutkan_alergi" id="sebutkan_alergi" hidden > </td>
                    </tr>

                    <tr>
                      <td> Alergi Obat Tertentu </td>
                      <td> <input type="radio" name="dua" value="Tidak"> </td>
                      <td> <input type="radio" name="dua" value="Ya"> </td>
                      <td><input type="text" name="sebutkan_obat" id="sebutkan_obat" hidden> </td>
                    </tr>

                    <tr>
                      <td>
                        Pernah mengalami cedera serius akibat kecelakaan
                        (geger otak/patah tulang/lainnya)   </td>
                      <td> <input type="radio" name="tiga" value="Tidak"> </td>
                      <td> <input type="radio" name="tiga" value="Ya"> </td>
                      <td> <input type="text" name="sebutkan_geger" id="sebutkan_geger" hidden> </td>
                    </tr>

                    <tr>
                      <td> Riwayat kejang berulang </td>
                      <td> <input type="radio" checked="checked" name="empat" value="Tidak"></td>
                      <td> <input type="radio" name="empat" value="Ya"> </td>
                      <td></td>
                    </tr>

                    <tr>
                      <td> Riwayat pingsan </td>
                      <td> <input type="radio" checked="checked" name="lima" value="Tidak"> </td>
                      <td> <input type="radio" name="lima" value="Ya"> </td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>Riwayat tranfusi darah berulang </td>
                      <td> <input type="radio" checked="checked" name="enam" value="Tidak"> </td>
                      <td> <input type="radio" name="enam" value="Ya"> </td>
                      <td></td>
                    </tr>

                    <tr>
                      <td>   Riwayat kelainan bawaan yang dimiliki </td>
                      <td> <input type="radio" name="tujuh" value="Tidak"> </td>
                      <td> <input type="radio" name="tujuh" value="Ya"> </td>
                      <td><input type="text" name="sebutkan_kelainan" id="sebutkan_kelainan" hidden></td>
                    </tr>

                    <tr>
                      <td> Riwayat penyakit lainnya </td>
                      <td> <input type="radio" name="delapan" value="Tidak"> </td>
                      <td> <input type="radio" name="delapan" value="Ya"> </td>
                      <td class="sebutkan5"><input type="text" name="sebutkan_penyakit_lainnya" id="sebutkan_penyakit_lainnya" hidden></td>
                    </tr>
                  </table>

                  <!-- Riwayat Imunisasi -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">B. Riwayat Imunisasi</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td> Tidak </td>
                      <td> Ya</td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td> Memiliki catatan imunisasi</td>
                      <td> <input type="radio" checked="checked" name="sembilan" value="Tidak"> </td>
                      <td> <input type="radio" name="sembilan" value="Ya"> </td>
                    </tr>
                    <tr>
                      <td> Saat bayi mendapat imunisasi </td>
                      <td> <input type="radio" checked="checked" name="sepuluh" value="Tidak"> </td>
                      <td> <input type="radio" name="sepuluh" value="Ya"> </td>
                    </tr>
                    <tr>
                      <td> Saat SD kelas 1 mendapat imunisasi </td>
                      <td> <input type="radio" checked="checked" name="sebelas" value="Tidak"> </td>
                      <td> <input type="radio" name="sebelas" value="Ya"> </td>
                    </tr>
                    <tr>
                      <td> Saat SD kelas 2 mendapat imunisasi </td>
                      <td> <input type="radio" checked="checked" name="duabelas" value="Tidak"> </td>
                      <td> <input type="radio" name="duabelas" value="Ya"> </td>
                    </tr>
                    <tr>
                      <td> Saat SD kelas 3 mendapat imunisasi </td>
                      <td> <input type="radio" checked="checked" name="tigabelas" value="Tidak"> </td>
                      <td> <input type="radio" name="tigabelas" value="Ya"> </td>
                    </tr>


                  </table>

                  <!-- Riwayat kesehatan keluarga -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">C. Riwayat Kesehatan Keluarga</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td> Tidak </td>
                      <td> Ya </td>
                      <td> Tidak Tahu </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td> Tuberkulosis(TBC)</td>
                      <td> <input type="radio" checked="checked" name="empatbelas" value="Tidak"> </td>
                      <td> <input type="radio" name="empatbelas" value="Ya"> </td>
                      <td> <input type="radio" name="empatbelas" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Diabetes Mellitus </td>
                      <td> <input type="radio" checked="checked" name="limabelas" value="Tidak"> </td>
                      <td> <input type="radio" name="limabelas" value="Ya"> </td>
                      <td> <input type="radio" name="limabelas" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Hepatitis/sakit kuning </td>
                      <td> <input type="radio" checked="checked" name="enambelas" value="Tidak"> </td>
                      <td> <input type="radio" name="enambelas" value="Ya"> </td>
                      <td> <input type="radio" name="enambelas" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Asma/bengek </td>
                      <td> <input type="radio" checked="checked" name="tujuhbelas" value="Tidak"> </td>
                      <td> <input type="radio" name="tujuhbelas" value="Ya"> </td>
                      <td> <input type="radio" name="tujuhbelas" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Penyakit jantung </td>
                      <td> <input type="radio" checked="checked" name="delapanbelas" value="Tidak"> </td>
                      <td> <input type="radio" name="delapanbelas" value="Ya"> </td>
                      <td> <input type="radio" name="delapanbelas" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Stroke/lumpuh </td>
                      <td> <input type="radio" checked="checked" name="sembilanbelas" value="Tidak"> </td>
                      <td> <input type="radio" name="sembilanbelas" value="Ya">  </td>
                      <td> <input type="radio" name="sembilanbelas" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Obesitas/gemuk sekali </td>
                      <td> <input type="radio" checked="checked" name="duapuluh" value="Tidak"> </td>
                      <td> <input type="radio" name="duapuluh" value="Ya"> </td>
                      <td> <input type="radio" name="duapuluh" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Tekanan darah tinggi </td>
                      <td> <input type="radio" checked="checked" name="duasatu" value="Tidak"> </td>
                      <td> <input type="radio" name="duasatu" value="Ya"> </td>
                      <td> <input type="radio" name="duasatu" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Kanker tumor ganas </td>
                      <td> <input type="radio" checked="checked" name="duadua" value="Tidak"> </td>
                      <td> <input type="radio" name="duadua" value="Ya"> </td>
                      <td> <input type="radio" name="duadua" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Anemia </td>
                      <td> <input type="radio" checked="checked" name="duatiga" value="Tidak"> </td>
                      <td> <input type="radio" name="duatiga" value="Ya"> </td>
                      <td> <input type="radio" name="duatiga" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Thalasemia </td>
                      <td> <input type="radio" checked="checked" name="duaempat" value="Tidak">
                      <td> <input type="radio" name="duaempat" value="Ya"> </td>
                      <td> <input type="radio" name="duaempat" value="Tidak Tahu"> </td>
                    </tr>

                    <tr>
                      <td> Hemofilia </td>
                      <td> <input type="radio" checked="checked" name="dualima" value="Tidak"> </td>
                      <td> <input type="radio" name="dualima" value="Ya"> </td>
                      <td> <input type="radio" name="dualima" value="Tidak Tahu"> </td>
                    </tr>
                  </table>

                  <!-- Gaya Hidup -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">D. Gaya Hidup</td>
                      <td colspan="3" align="center">Keterangan</td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td> Sarapan </td>
                      <td> <input type="radio" checked="checked" name="duaenam" value="Selalu">Selalu </td>
                      <td> <input type="radio" name="duaenam" value="Kadang">Kadang </td>
                      <td> <input type="radio" name="duaenam" value="Tidak Pernah">Tidak Pernah </td>
                    </tr>

                    <tr>
                      <td> Jajan </td>
                      <td> <input type="radio" checked="checked" name="duatujuh" value="Selalu">Selalu </td>
                      <td> <input type="radio" name="duatujuh" value="Kadang">Kadang </td>
                      <td> <input type="radio" name="duatujuh" value="Tidak Pernah">Tidak Pernah </td>
                    </tr>

                    <tr>
                      <td> Risiko merokok </td>
                      <td> <input type="radio" checked="checked" name="duadelapan" value="Tidak">Tidak </td>
                      <td> <input type="radio" name="duadelapan" value="Ya">Ya </td>
                    </tr>

                    <tr>
                      <td> Risiko minum minuman beralkohol dan Napza </td>
                      <td> <input type="radio" checked="checked" name="duasembilan" value="Tidak">Tidak </td>
                      <td> <input type="radio" name="duasembilan" value="Ya">Ya </td>
                    </tr>
                  </table>

                  <!-- Kesehatan Reproduksi -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">E. Kesehatan Reproduksi</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td> Tidak </td>
                      <td> Ya </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td> Masalah pubertas </td>
                      <td> <input type="radio" checked="checked" name="tigapuluh" value="Tidak"> </td>
                      <td> <input type="radio" name="tigapuluh" value="Ya"> </td>
                    </tr>

                    <tr>
                      <td> Risiko IMS </td>
                      <td> <input type="radio" checked="checked" name="tigasatu" value="Tidak"> </td>
                      <td> <input type="radio" name="tigasatu" value="Ya"> </td>
                    </tr>

                    <tr>
                      <td> Risiko kekerasan seksual </td>
                      <td> <input type="radio" checked="checked" name="tigadua" value="Tidak"> </td>
                      <td> <input type="radio" name="tigadua" value="Ya"> </td>
                    </tr>
                    <?php if($tampil['jk'] == "P"){ ?>
                    <tr>
                      <td> Gangguan menstruasi </td>
                      <td> <input type="radio" checked="checked" name="tigatiga" value="Tidak"> </td>
                      <td> <input type="radio" name="tigatiga" value="Ya"> </td>
                    </tr>
                  <?php }else{?>
                  <?php } ?>
                  </table>

                  <!-- Kesehatan mental emosional skor kesulitan -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">F. Kesehatan Mental Emosional Skor Kesulitan</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td> Normal </td>
                      <td>  Borderline </td>
                      <td> Abnormal </td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td> Gejala emosional (E) </td>
                      <td> <input type="radio" checked="checked" name="tigaempat" value="Normal"> </td>
                      <td> <input type="radio" name="tigaempat" value="Borderline"> </td>
                      <td> <input type="radio" name="tigaempat" value="Abnormal"> </td>
                    </tr>

                    <tr>
                      <td> Masalah perilaku (C) </td>
                      <td> <input type="radio" checked="checked" name="tigalima" value="Normal"> </td>
                      <td> <input type="radio" name="tigalima" value="Borderline"> </td>
                      <td> <input type="radio" name="tigalima" value="Abnormal"> </td>
                    </tr>
                    <tr>
                      <td> Hiperaktifitas (H) </td>
                      <td> <input type="radio" checked="checked" name="tigaenam" value="Normal"> </td>
                      <td> <input type="radio" name="tigaenam" value="Borderline"> </td>
                      <td> <input type="radio" name="tigaenam" value="Abnormal"> </td>
                    </tr>
                    <tr>
                      <td> Masalah teman sebaya (P) </td>
                      <td> <input type="radio" checked="checked" name="tigatujuh" value="Normal"> </td>
                      <td> <input type="radio" name="tigatujuh" value="Borderline"> </td>
                      <td> <input type="radio" name="tigatujuh" value="Abnormal"> </td>
                    </tr>
                    <tr>
                      <td> Perilaku Prososial (Pr) </td>
                      <td> <input type="radio" checked="checked" name="tigadelapan" value="Normal"> </td>
                      <td> <input type="radio" name="tigadelapan" value="Borderline"> </td>
                      <td> <input type="radio" name="tigadelapan" value="Abnormal"></td>
                    </tr>
                  </table>

                  <!-- Kesehatan intelegensia -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">G. Kesehatan Intelegensia</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>

                    <!-- Riwayat Kesehatan anak -->
                    <tr>
                      <td> Visual </td>
                      <td> <input type="radio" checked="checked" name="tigasembilan" value="Optimal">Optimal </td>
                      <td> <input type="radio" name="tigasembilan" value="Cukup Optimal">Cukup Optimal</td>
                      <td> <input type="radio" name="tigasembilan"  value="Belum Optimal">Belum Optimal </td>
                    </tr>

                    <tr>
                      <td>Audio</td>
                      <td><input type="radio" checked="checked" name="empatpuluh" value="Optimal">Optimal</td>
                      <td><input type="radio" name="empatpuluh" value="Cukup Optimal">Cukup Optimal</td>
                      <td><input type="radio" name="empatpuluh"  value="Belum Optimal">Belum Optimal</td>
                    </tr>
                    <tr>
                      <td>Kinestetik </td>
                      <td> <input type="radio" checked="checked" name="empatsatu" value="Optimal">Optimal </td>
                      <td><input type="radio" name="empatsatu" value="Cukup Optimal"> Cukup Optimal</td>
                      <td><input type="radio" name="empatsatu" value="Belum Optimal">Belum Optimal </td>
                    </tr>
                    <tr>
                      <td>Dominasi otak</td>
                      <td><input type="radio" checked="checked" name="empatdua" value="Otak Kiri"> Otak Kiri</td>
                      <td><input type="radio" name="empatdua" value="Otak Kanan">Otak Kanan</td>
                      <td><input type="radio" name="empatdua" value="Otak Kiri Kanan">Otak Kiri Kanan</td>
                    </tr>
                  </table>

                  <!-- Bagian 2 -->
                  <table class="table table-bordered table-hover">
                    <tr>
                      <td colspan="3" style="font-weight: bold;"->II. Pemeriksaan Fisik oleh Tenaga Kesehatan, dibantu Guru dan Kader Kesehatan</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">A. Pemeriksaan Tanda-tanda Vital</td>
                      <td colspan="2" align="center">Keterangan</td>
                    </tr>

                    <!-- Pemeriksaan Tanda-tanda Vital -->
                    <tr>
                      <td>Tekanan darah</td>
                      <td style="background-color:red;" colspan="2"><input type="text" name="empattiga" class="form-control" style="display:inherit; width:89%;" hidden> mm Hg</td>
                    </tr>

                    <tr>
                      <td>Denyut nadi</td>
                      <td style="background-color:red;" colspan="2"><input type="text" name="empatempat" class="form-control" style="display:inherit; width:89%;" hidden>&nbsp; / menit</td>
                    </tr>

                    <tr>
                      <td>Frekuensi pernapasan</td>
                      <td style="background-color:red;" colspan="2"><input type="text" name="empatlima" class="form-control" style="display:inherit; width:89%;" hidden>&nbsp; / menit</td>
                    </tr>

                    <tr>
                      <td>Suhu</td>
                      <td style="background-color:red;" colspan="2"><input type="text" name="empatenam" class="form-control" style="display:inherit; width:89%;" hidden>&nbsp; °C</td>
                    </tr>

                    <tr>
                      <td>Bising jantung</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="empattujuh" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="empattujuh" value="Ya"> Ya</td>
                    </tr>

                    <tr>
                      <td>Bising paru</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="empatdelapan" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="empatdelapan" value="Ya"> Ya</td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">B. Pemeriksaan Status Gizi</td>
                      <td colspan="2" align="center">Keterangan</td>
                    </tr>

                    <!-- Pemeriksaan Status Gizi -->
                    <tr>
                      <td> Berat badan</td>
                      <td colspan="2"><input type="number" required name="empatsembilan" id="berat" onkeyup='imt()' class="form-control" style="display:inherit; width:89%;" value="">&nbsp; Kg </td>
                    </tr>

                    <tr>
                      <td>Tinggi badan</td>
                      <td colspan="2"><input type="number" required name="limapuluh" id="tinggi" onkeyup='imt()' class="form-control" style="display:inherit; width:89%;" value="">&nbsp; Cm</td>
                    </tr>

                    <tr>
                      <td> IMT (BB/TBxTB) </td>
                      <td colspan="2"> <input type="text" name="limasatu" id="hasil_imt" class="form-control" hidden="true"><p id="text_imt"></p> </td>
                    </tr>

                    <tr>
                      <td> Kategori </td>
                      <td colspan="2"> <input type="text" name="limadua" id="kategori_imt" class="form-control" hidden="true"><p id="text_kategori"></p </td>
                    </tr>

                    <!-- <tr>
                      <td> TB/U (Stunting) </td>
                      <td style="background-color:red;"> <input type="radio" disabled="true" name="limatiga" value="Tidak"> Tidak </td>
                      <td style="background-color:red;"> <input type="radio" disabled="true" name="limatiga" value="Ya"> Ya </td>
                    </tr>

                    <tr>
                      <td> Tanda klinis anemia<br/>
                        ( conjungtiva / kelopak mata bag dalam bawah pucat, bibir, lidah,
                        <p>telapak tangan pucat )</p>
                      </td>
                      <td style="background-color:red;"> <input type="radio" disabled="true" name="limaempat" value="Tidak"> Tidak </td>
                      <td style="background-color:red;"> <input type="radio" disabled="true" name="limaempat" value="Ya"> Ya </td>
                    </tr> -->
                  </table>

                  <table  class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">C. Pemeriksaan Kebersihan Diri</td>
                      <td colspan="2" align="center">Keterangan</td>
                    </tr>

                    <!-- Pemeriksaan Kebersihan Diri  -->

                    <tr>
                      <td>Rambut</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="limalima" value="Tidak Sehat"> Tidak Sehat</td>
                      <td style="background-color:red;"><input type="radio" disabled name="limalima" value="Sehat"> Sehat</td>
                    </tr>
                    <tr>
                      <td>Kulit berbecak keputihan, <p>kemerahan / kehitaman</p> </td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="limaenam" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled name="limaenam" value="Ya"> Ya</td>
                    </tr>
                    <tr>
                      <td>Kulit bersisik</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="limatujuh" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled name="limatujuh" value="Ya"> Ya</td>
                    </tr>
                    <tr>
                      <td>Kulit ada memar</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="limadelapan" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled name="limadelapan" value="Ya"> Ya</td>
                    </tr>
                    <tr>
                      <td>Kulit ada luka sayatan</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="limasembilan" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled name="limasembilan" value="Ya"> Ya</td>
                    </tr>
                    <tr>
                      <td>Kulit ada luka koreng</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="enampuluh" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled name="enampuluh" value="Ya"> Ya</td>
                    </tr>
                    <tr>
                      <td>Kulit ada luka koreng sukar sembuh</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="enamsatu" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled name="enamsatu" value="Ya"> Ya</td>
                    </tr>
                    <tr>
                      <td>Kulit ada bekas suntikan</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="enamdua" value="Tidak"> Tidak</td>
                      <td style="background-color:red;"><input type="radio" disabled name="enamdua" value="Ya"> Ya</td>
                    </tr>
                    <tr>
                      <td>Kuku</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="enamtiga" value="Tidak Sehat"> Tidak Sehat</td>
                      <td style="background-color:red;"><input type="radio" disabled name="enamtiga" value="Ya"> Sehat</td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">D. Pemeriksaan Kesehatan Penglihatan</td>
                      <td colspan="4" align="center">Keterangan</td>
                    </tr>

                    <tr>
                      <td>Mata Luar</td>
                      <td style="background-color:red;" colspan="2"><input type="radio" disabled="true" name="enamempat" value="Normal"> Normal</td>
                      <td style="background-color:red;" colspan="2"><input type="radio" disabled="true" name="enamempat" value="Tidak Sehat"> Tidak Sehat</td>
                    </tr>
                    <tr>
                      <td>Tajam Penglihatan</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="enamlima" value="Normal"> Normal</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="enamlima" value="Low Vision">Low Vision</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="enamlima" value="Kelainan Refraksi">Kelainan Refraksi</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="enamlima" value="Kebutaan">Kebutaan</td>
                    </tr>
                    <tr>
                      <td>Buta Warna</td>
                      <td style="background-color:red;" colspan="2"><input type="radio" disabled="true" name="enamenam" value="Tidak"> Tidak</td>
                      <td style="background-color:red;" colspan="2"><input type="radio" disabled="true" name="enamenam" value="Ya"> Ya</td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">E. Pemeriksaan Kesehatan Pendengaran</td>
                      <td colspan="3" align="center">Keterangan</td>
                    </tr>

                    <tr>
                      <td>Telinga luar</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="enamtujuh" value="Sehat">Sehat</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="enamtujuh" value="Infeksi"> Infeksi</td>
                      <td style="background-color:red;"><input type="radio" disabled="true" name="enamtujuh" value="Serumen"> Serumen</td>
                    </tr>
                    <tr>
                      <td>Tajam Pendengaran</td>
                      <td style="background-color:red;"><input type="radio" name="enamdelapan" value="Normal"> Normal</td>
                      <td style="background-color:red;"><input type="radio" name="enamdelapan" value="Ada Gangguan"> Ada Gangguan</td>
                      <td style="background-color:red;"><input type="text" class="form-control" name="ada_gangguan" id="ada_gangguan" hidden></td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">F. Pemeriksaan Kesehatan Gigi dan Mulut</td>
                      <td colspan="3" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>Tidak</td>
                      <td>Ya</td>
                      <td>Lainnya</td>
                    </tr>
                    <tr>
                      <td>Celah bibir / langit-langit*</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="enamsembilan" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="enamsembilan" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>

                    <tr>
                      <td>Luka pada sudut mulut</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhpuluh" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhpuluh" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>

                    <tr>
                      <td>Sariawan</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhsatu" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhsatu" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>

                    <tr>
                      <td>Lidah kotor</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhdua" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhdua" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>

                    <tr>
                      <td>Luka lainnya</td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhtiga" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhtiga" value="Ya"></td>
                      <td style="background-color:red;"><input type="text"  class="form-control" name="IIFlokasi_luka_lainnya" id="IIF5" hidden></td>
                    </tr>
                    <!-- Gigi -->
                    <tr>
                      <td>Gigi berlubang / karies</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhempat" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhempat" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>
                    <tr>
                      <td>Gusi mudah berdarah</td>
                      <td style="background-color:red;" ><input type="radio" disabled checked="checked" name="tujuhlima" value="Tidak"></td>
                      <td style="background-color:red;" ><input type="radio" disabled name="tujuhlima" value="Ya"></td>
                      <td style="background-color:red;" ></td>
                    </tr>
                    <tr>
                      <td>Gusi bengkak</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhenam" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhenam" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>
                    <tr>
                      <td>Gigi kotor (ada plak & sisa makanan)</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhtujuh" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhtujuh" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>
                    <tr>
                      <td>Karang gigi</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhdelapan" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhdelapan" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>
                    <tr>
                      <td>Susunan gigi depan tidak teratur</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="tujuhsembilan" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="tujuhsembilan" value="Ya"></td>
                      <td style="background-color:red;"></td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">G. Pemakaian Alat Bantu</td>
                      <td colspan="2" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>Tidak</td>
                      <td>Ya</td>
                    </tr>
                    <tr>
                      <td>Penglihatan / Loupe</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="delapanpuluh" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="delapanpuluh" value="Ya"></td>
                    </tr>
                    <tr>
                      <td>Pendengaran</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="delapansatu" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="delapansatu" value="Ya"></td>
                    </tr>
                    <tr>
                      <td>Kursi roda</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="delapandua" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="delapandua" value="Ya"></td>
                    </tr>
                    <tr>
                      <td>Tongkat / Kurk</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="delapantiga" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="delapantiga" value="Ya"></td>
                    </tr>
                    <tr>
                      <td>Kaki / tangan / mata protese</td>
                      <td style="background-color:red;"><input type="radio" disabled checked="checked" name="delapanempat" value="Tidak"></td>
                      <td style="background-color:red;"><input type="radio" disabled name="delapanempat" value="Ya"></td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">H. Pemeriksaan Kebugaran jasmani</td>
                      <td align="center">Keterangan</td>
                    </tr>

                    <tr>
                      <td>Jumlah nilai</td>
                      <td style="background-color:red;"><input type="number" disabled class="form-control" checked="checked" name="delapanlima" value=""></td>
                    </tr>

                    <tr>
                      <td>Klarifikasi tingkat kebugaran jasmani daya tahan <p>tahan jantung-paru dengan single tes</p> </td>
                      <td style="background-color:red;"><input type="text" disabled="true" class="form-control" name="delapanenam" value=""></td>
                    </tr>
                  </table>

                  <!-- <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;"->III. Kesimpulan</td>
                    </tr>

                    <tr>
                      <td style="font-weight: bold;">A. Kesimpulan Point I (Pemeriksaan Berdasarkan Kuesioner)</td>
                    </tr>

                    <tr>
                      <td style="height:200px;"> <textarea name="kesimpulan1" class="form-control" style="height:150px!important;" cols="80"></textarea> </td>
                    </tr>

                    <tr>
                      <td style="font-weight: bold;">B. Kesimpulan Point II (Pemeriksaan Fisik)</td>
                    </tr>

                    <tr>
                      <td style="height:200px;"> <textarea name="kesimpulan2" class="form-control" style="height:150px!important;"  cols="80"></textarea> </td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td rowspan="2" style="font-weight: bold;">IV. Dirujuk</td>
                      <td colspan="3" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>Tidak</td>
                      <td>Ya</td>
                      <td>Lainnya</td>
                    </tr>
                    <tr>
                      <td>Dirujuk</td>
                      <td><input type="radio" name="rujuk" value="Tidak"></td>
                      <td><input type="radio" name="rujuk" value="Ya"></td>
                      <td><input type="date" class="form-control" name="tgl_rujukan" id="tgl_rujukan" hidden></td>
                    </tr>
                    <tr>
                      <td colspan="4" align="center" style="font-weight: bold; font-size:16px;" >Mengetahui</td>
                    </tr>
                    <tr>
                      <td colspan="2" align="left" >Petugas Puskesmas <br><br><br><br/> <p>(.....................................................)</p> </td>
                      <td colspan="2" align="right" >Wali Kelas/Guru  <br><br><br><br/> <p>(.....................................................)</p></td>
                    </tr>
                  </table>

                  <table class="table table-bordered table-hover">
                    <tr>
                      <td style="font-weight: bold;">V. Tindak Lanjut</td>
                      <td colspan="2" align="center">Keterangan</td>
                    </tr>
                    <tr>
                      <td>Pemantauan oleh orang tua / guru</td>
                      <td align="left" >Orangtua <br><br><br><br/> <p>(.....................................................)</p> </td>
                      <td align="right" >Wali Kelas/Guru  <br><br><br><br/> <p>(.....................................................)</p></td>
                    </tr>
                    <tr>
                      <td>Mendampingi peserta didik ke puskesmas <p>(Jika diperlukan rujukan)</p> <br><br><br/>
                        <p>(.....................................................)</p>
                      </td>
                      <td align="left" >Orangtua          <br><br><br><br><br><br/> <p>(.....................................................)</p> </td>
                      <td align="right" >Wali Kelas/Guru  <br><br><br><br><br><br/> <p>(.....................................................)</p></td>
                    </tr>
                  </table> -->

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

  <script type="text/javascript">
  var hasil;
  function imt(){
    var tinggi = parseFloat($('#tinggi').val());
        tinggi /= 100;

    var berat = parseFloat($('#berat').val());
    hasil = berat / (tinggi * tinggi);

    $('#hasil_imt').attr('value', hasil);
    $('#text_imt').text(hasil).show();

    if(hasil < 17.0 ){
          $('#kategori_imt').attr('value', 'Sangat Kurus').show();
          $('#text_kategori').text('Sangat Kurus').show();
    }else if((hasil >= 17.0) & (hasil <= 18.5 ) ){
          $('#kategori_imt').attr('value', 'Kurus').show();
          $('#text_kategori').text('Kurus').show();
    }else if ((hasil >= 18.5) & (hasil <= 25.0)){
          $('#kategori_imt').attr('value', 'Normal').show();
          $('#text_kategori').text('Normal').show();
    }else if ((hasil >= 25.0) & (hasil <= 27.0)){
          $('#kategori_imt').attr('value', 'Gemuk').show();
          $('#text_kategori').text('Gemuk').show();
    }else if (hasil > 27.0){
          $('#kategori_imt').attr('value', 'Sangat Gemuk').show();
          $('#text_kategori').text('Sangat Gemuk').show();
    }else{
          $('#kategori_imt').attr('value', 'Not define').show();
          $('#text_kategori').text('Not define').show();
    }
  }

    $(document).ready(function() {

      $('input:radio[name="satu"]').change(function(){
  			 if ($(this).val() == 'Ya' ) {
  				 	$('#sebutkan_alergi').removeAttr('hidden');

  			 }
  			 else {
  					$('#sebutkan_alergi').attr('hidden', 'false');
  			 }
  		});

      $('input:radio[name="dua"]').change(function(){
        if ($(this).val() == 'Ya' ) {
           $('#sebutkan_obat').removeAttr('hidden');

        }
        else {
           $('#sebutkan_obat').attr('hidden', 'false');
        }
  		});

      $('input:radio[name="tiga"]').change(function(){
        if ($(this).val() == 'Ya' ) {
           $('#sebutkan_geger').removeAttr('hidden');

        }
        else {
           $('#sebutkan_geger').attr('hidden', 'false');
        }
      });

      $('input:radio[name="tujuh"]').change(function(){
        if ($(this).val() == 'Ya' ) {
           $('#sebutkan_kelainan').removeAttr('hidden');

        }
        else {
           $('#sebutkan_kelainan').attr('hidden', 'false');
        }
      });

      $('input:radio[name="delapan"]').change(function(){
        if ($(this).val() == 'Ya' ) {
           $('#sebutkan_penyakit_lainnya').removeAttr('hidden');

        }
        else {
           $('#sebutkan_penyakit_lainnya').attr('hidden', 'false');
        }
      });

      $('input:radio[name="tujuhtiga"]').change(function(){
         if ($(this).val() == 'Ya' ) {
            $('#IIF5').removeAttr('hidden');

         }
         else {
            $('#IIF5').attr('hidden', 'false');
         }
      });

      $('input:radio[name="enamdelapan"]').change(function(){
         if ($(this).val() == 'Ada Gangguan' ) {
            $('#ada_gangguan').removeAttr('hidden');
         }
         else {
            $('#ada_gangguan').attr('hidden', 'false');
         }
      });

      $('input:radio[name="rujuk"]').change(function(){
        if ($(this).val() == 'Ya' ) {
          $('#tgl_rujukan').removeAttr('hidden');

        }
        else {
          $('#tgl_rujukan').attr('hidden', 'false');
        }
      });

    });
  </script>
</body>
</html>
