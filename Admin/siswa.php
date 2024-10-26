<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashoboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            </div>
            <div class="card-body">
              <a href="?url=data_siswa" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Data Siswa</span>
                       </a>  
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NISN</th>
                      <th>NIS</th>
                      <th>Nama Siswa</th>
                      <th>Nama Kelas</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                      <th>Tahun</th>
                      <th>Nominal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php

                  include "koneksi.php";
                  $no=1;
                  $sql=mysqli_query($koneksi,"SELECT * FROM siswa JOIN spp ON spp.id_spp=siswa.id_spp JOIN kelas ON kelas.id_kelas=siswa.id_kelas");
                  while ($data=mysqli_fetch_array($sql)) {
                    ?>

                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['nisn']; ?></td>
                      <td><?php echo $data['nis']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['nama_kelas']; ?></td>
                      <td><?php echo $data['alamat']; ?></td>
                      <td><?php echo $data['no_telp']; ?></td>
                      <td><?php echo $data['tahun']; ?></td>
                      <td><?php echo $data['nominal']; ?></td>
                      <td>
                       <a href="?url=edit_siswa&nisn=<?php echo $data['nisn']; ?>" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-edit"></i>
                        </span>
                       
                      </a>   

                      <a href="?url=delete_siswa&nisn=<?php echo $data['nisn']; ?>" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                        </span>
                       
                      </a>  

                      </td>
                    </tr>
                   
                  </tbody>
                <?php } ?>
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
