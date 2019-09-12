<?php  

    @session_start();
    include 'config/koneksi.php';

    if(isset($_POST['login']))
    {
      @$sql = mysqli_query($con, "SELECT * FROM tbl_user where username='$_POST[username]' AND password='$_POST[password]' AND level='$_POST[level]'");
      @$cek = mysqli_num_rows($sql);
      @$data = mysqli_fetch_array($sql);

      if($cek > 0){
        if($data['level'] == 'guru'){
          $_SESSION['guru'] = $_POST['username'];
          echo "<script>alert('Selamat Datang $_POST[username]');document.location.href='guru/index.php'</script>";
        }elseif ($data['level'] == 'kepsek') {
          $_SESSION['kepsek'] = $_POST['username'];
          echo "<script>alert('Selamat Datang $_POST[username]');document.location.href='kepsek/index.php'</script>";
        }elseif ($data['level'] == 'siswa'){
           $_SESSION['siswa'] = $_POST['username'];
           echo "<script>alert('Selamat Datang $_POST[username]');document.location.href='siswa/index.php'</script>";
        }elseif ($data['level'] == 'medis'){
           $_SESSION['medis'] = $_POST['username'];
           echo "<script>alert('Selamat Datang $_POST[username]');document.location.href='medis/index.php'</script>";
        }
      }else{
        echo "<script>alert('Username & Password Tidak Cocok');document.location.href='index.php'</script>";
      }

    }

?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login - UKS</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="dist/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="dist/css/style.css">
  <style type="text/css">
    #backLogin{
      background: url(dist/img/2.png);
      background-size: 900px;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body id="backLogin">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-8">
            <div class="login-brand">
              <img src="dist/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login - SIM / KUESIONER UKS</h4></div>

              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input id="username" type="text" class="form-control" autocomplete="off" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" autocomplete="off" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Masuk Sebagai</label>
                    <select class="form-control" name="level">
                      <option value=""></option>
                      <option value="guru">Guru UKS</option>
                      <option value="kepsek">Kepala Sekolah</option>
                      <option value="siswa">Siswa</option>
                      <option value="medis">Medis</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="login"  class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="dist/modules/jquery.min.js"></script>
  <script src="dist/modules/popper.js"></script>
  <script src="dist/modules/tooltip.js"></script>
  <script src="dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="dist/modules/moment.min.js"></script>
  <script src="dist/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <!-- JS Libraies -->
  <script src="dist/modules/sweetalert/sweetalert.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="dist/js/page/modules-sweetalert.js"></script>
  

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="dist/js/scripts.js"></script>
  <script src="dist/js/custom.js"></script>
</body>
</html>