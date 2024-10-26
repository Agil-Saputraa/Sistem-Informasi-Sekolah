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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <div class="card shadow">
    <div class="card-header">
     <h1> Masukan Data Pembayaran</h1>
    </div>
    <div class="card-body">
    
      <form action="p_data_pembayaran.php" method="POST">

        <div class="form-group cols-sm-6">
            <label>Id Pembayaran</label>
            <input type="text" name="id_pembayaran" class="form-control" readonly="" >
         </div>

         <div class="form-group cols-sm-6">
            <label>Nama Anggota/Petugas :</label>
              <select name="id_anggota" class="form-control">
              <?php
                include "koneksi.php";
                $sql=mysqli_query($koneksi, "select * from anggota");
                while ($data=mysqli_fetch_array($sql)){
              ?>
              <option class="form-control" value="<?php echo $data['id_anggota']; ?>"><?php echo $data['nama_anggota']; ?></option>
            <?php } ?>
            </select>
         </div>

         <div class="form-group cols-sm-6">
            <label>Nama Siswa :</label>
            <select name="nisn" class="form-control">
              <?php
                include "koneksi.php";
                $sql=mysqli_query($koneksi, "select * from siswa");
                while ($data=mysqli_fetch_array($sql)){
              ?>
              <option class="form-control" value="<?php echo $data['nisn']; ?>"><?php echo $data['nama']; ?></option>
            <?php } ?>
            </select>
         </div>

         <div class="form-group cols-sm-6">
            <label>Tanggal Bayar</label>
            <input type="text" name="tanggal_bayar" class="form-control" value="<?php echo date('d/m/Y'); ?>">
         </div>
         <div class="form-group cols-sm-6">
            <label>Bulan Dibayar </label>
            <input type="number" name="bulan_dibayar" class="form-control">
         </div>
         <div class="form-group cols-sm-6">
            <label>Tahun</label>
                <?php
                $now=date('Y');
                echo "<select name='tahun_dibayar' class='form-control'>";
                for ($a=2000;$a<=$now;$a++)
                {
                     echo "<option value='$a'>$a</option>";
                }
                echo "</select>";
                ?>
         </div>
        
         <div class="form-group cols-sm-6">
            <label>Nominal:</label>
            <select name="id_spp" class="form-control">
              <?php
                include "koneksi.php";
                $sql=mysqli_query($koneksi, "select * from spp");
                while ($data=mysqli_fetch_array($sql)){
              ?>
              <option class="form-control" value="<?php echo $data['nominal']; ?>"><?php echo $data['nominal']; ?></option>
            <?php } ?>
            </select>
         </div>

          <div class="form-group cols-sm-6">
            <input type="hidden" name="jumlah_bayar" class="form-control">
         </div>

         <div class="form-group cols-sm-6">
            <input type="submit" name="" value="Simpan">
            <input type="reset" name="" value="Batal">
         </div>
        
      </form>
    
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
