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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php
  include "koneksi.php";
  $nisn=$_GET['nisn'];
  $sql=mysqli_query($koneksi, "select * from siswa where nisn='$nisn'");
  while ($data=mysqli_fetch_array($sql)){

  ?>

  <div class="card shadow">
    <div class="card-header">
      Edit Data Siswa
    </div>
    <div class="card-body">
      <form action="p_edit_data_siswa.php" method="POST">

        <div class="form-group cols-sm-6">
            <label>NISN</label>
            <input type="text" name="nisn" class="form-control" value="<?php echo $data['nisn']; ?>" readonly="">
         </div>
         <div class="form-group cols-sm-6">
            <label>NIS</label>
            <input type="text" name="nis" class="form-control" value="<?php echo $data['nis']; ?>" >
         </div>
         <div class="form-group cols-sm-6">
            <label>Nama Siswa</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
         </div>
         <div class="form-group cols-sm-6">
            <label>Id Kelas :</label>
            <input type="text" class="form-control" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" readonly><br>
            
         </div>
         <div class="form-group cols-sm-6">
            <label>Alamat</label>
            <textarea class="form-control" rows="7" name="alamat"><?php echo $data['alamat']; ?></textarea>
         </div>
         <div class="form-group cols-sm-6">
            <label>No Telepon</label>
            <input type="number" name="no_telp" class="form-control" value="<?php echo $data['no_telp']; ?>">
         </div>
         <div class="form-group cols-sm-6">
            <label>Id SPP :</label>
            <input type="text" name="id_spp" value="<?php echo $data['id_spp']; ?>" class="form-control" readonly=""> <br>
            
         </div>
         <div class="form-group cols-sm-6">
            <input type="submit" name="" value="Simpan">
            <input type="reset" name="" value="Batal">
         </div>

        
      </form>

      <?php } 
      ?>
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
