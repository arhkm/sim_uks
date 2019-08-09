
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIM UKS</title>

  <!-- General CSS Files -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      

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
              </div>
               <div class="card-body">
                 <table border="1" class="table table-bordered table-striped table-hover" id="#table">
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

                      $tanggal = date('d-m-Y');

                      $no = 1;
                      $query = mysqli_query($con, "SELECT * FROM tbl_siswa");
                      while($data = mysqli_fetch_assoc($query)){

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
        </div>
      </footer>
    </div>
  </div>

  
</body>
</html>