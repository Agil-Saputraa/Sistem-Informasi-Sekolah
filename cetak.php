<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pembayaran</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

 <h1 align="center">Data Pembayaran SPP Siswa</h1>
      
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="card shadow">
          <div class="card-header">
            Laporan 
          </div>
        <div class="card-body">
       

        <?php 

      include 'koneksi.php';

    ?>

     <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>No Pembayaran</th>
                      <th>Tanggal Bayar</th>
                      <th>Nisn</th>
                      <th>Nama Siswa</th>
                      <th>Jumlah Bayar</th>
                      
                    </tr>
                  </thead>
                    <?php 
                    $no = 1;

                    if(isset($_GET['tanggal_bayar'])){
                      $tanggal_bayar = $_GET['tanggal_bayar'];
                      $sql = mysqli_query($koneksi,"SELECT * FROM pembayaran JOIN siswa ON siswa.nisn=pembayaran.nisn JOIN anggota ON anggota.id_anggota=pembayaran.id_anggota");
                    }else{
                      $sql = mysqli_query($koneksi,"SELECT * FROM pembayaran JOIN siswa ON siswa.nisn=pembayaran.nisn JOIN anggota ON anggota.id_anggota=pembayaran.id_anggota");
                    }
                    
                    while($data = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['tanggal_bayar']; ?></td>
                      <td><?php echo $data['nisn']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['jumlah_bayar']; ?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                  </table>
                  
                </center>
              </div></div></div></div>
              <script>
                  window.print();
                </script>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
