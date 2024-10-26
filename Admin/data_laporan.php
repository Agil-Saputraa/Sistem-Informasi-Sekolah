<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laporan</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top"> 
        <div class="container-fluid">
          <!-- Page Heading -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Pembayaran</h6>
            </div>
            <div class="card-body">
              <a href="dashboard_admin.php" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-undo-alt"></i>
                        </span>
                        <span class="text"> Dashboard Admin</span>
                       </a>  
                     </div>
<?php 
include 'koneksi.php';
?>

                      <br/><br/><br/>
                      <div class="card-body">
                      <form method="get" action="data_laporan.php">
                        <div class="form-group cols-sm-6">
                        <label>PILIH TANGGAL</label>
                        <input type="date" name="tanggal_bayar" class="form-control">
                      </div>
                      <div class="form-group cols-sm-6">
                        <input type="submit" value="FILTER" class="btn-primary">
                      </form>
                    </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Tanggal Bayar</th>
                                <th>NISN</th>
                                <th>Jumlah Bayar</th>
                              </tr>
                            </thead>
                            
                        <?php 
                        $no = 1;

                        if(isset($_GET['tanggal_bayar'])){
                          $tgl = $_GET['tanggal_bayar'];
                          $sql = mysqli_query($koneksi,"select * from pembayaran where tanggal_bayar='$tgl'");
                        }else{
                          $sql = mysqli_query($koneksi,"select * from pembayaran");
                        }
                        
                        while($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['tanggal_bayar']; ?></td>
                          <td><?php echo $data['nisn']; ?></td>
                          <td><?php echo $data['jumlah_bayar']; ?></td>
                        </tr>
                        <?php 
                        }
                        ?>
                      </table>
                      <center>
                          <a href="cetak.php" class="btn btn-danger btn-icon-split" target="_blank">
                            <span class="icon text-white-50">
                              <i class="fas fa-print"></i>
                            </span>
                            <span class="text">PRINT</span>
                          </a>
                      </center>
                  </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        </div>
     
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
