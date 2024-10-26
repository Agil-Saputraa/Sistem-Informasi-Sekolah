<?php
session_start();
include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_query($koneksi,"select * from anggota where username='$username' and password='$password'");
$cek=mysqli_num_rows($sql);

	if ($cek > 0)
	{
		$data=mysqli_fetch_array($sql);

		if ($data['level']=="admin")
		{

		$_SESSION['username']=$username;
		$_SESSION['level']="admin";
		$_SESSION['nama_anggota']=$data['nama_anggota'];
		$_SESSION['id_anggota']=$data['id_anggota'];
		header("location:dashboard_admin.php");

		}
		else if ($data['level']=="walikelas")
		{
		
		$_SESSION['username']=$username;
		$_SESSION['level']="walikelas";
		$_SESSION['nama_anggota']=$data['nama_anggota'];
		$_SESSION['id_anggota']=$data['id_anggota'];
		header("location:../login.php");

		}
	}
	else
	{
		?>
		<script type="text/javascript">
		alert ('Username dan Password Tidak Ditemukan');
		window.location="index.php";
		</script>
	<?php
	}
	?>