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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">History Pembayaran</h6>
            </div>
            <div class="card-body">
          
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Bayar</th>
                      <th>Nama Anggota</th>
                      <th>NISN</th>
                      <th>NIS</th>
                      <th>Nama Siswa</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                      <th>Bulan Dibayar</th>
                      <th>Tahun Dibayar</th>
                      <th>Jumlah Bayar</th>
                      
                    </tr>
                  </thead>
                  <?php

                  include "koneksi.php";
                  $no=1;
                  $sql=mysqli_query($koneksi,"SELECT * FROM pembayaran JOIN siswa ON siswa.nisn=pembayaran.nisn JOIN anggota ON anggota.id_anggota=pembayaran.id_anggota");
                  while ($data=mysqli_fetch_array($sql)) {
                    ?>


                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['tanggal_bayar']; ?></td>
                      <td><?php echo $data['nama_anggota']; ?></td>
                      <td><?php echo $data['nisn']; ?></td>
                      <td><?php echo $data['nis']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['alamat']; ?></td>
                      <td><?php echo $data['no_telp']; ?></td>
                      <td><?php echo $data['bulan_dibayar']; ?></td>
                      <td><?php echo $data['tahun_dibayar']; ?></td>
                      <td><?php echo $data['jumlah_bayar']; ?></td>
                      
                    </tr>
                   
                  </tbody>
                <?php } 
                ?>
                </table>
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
