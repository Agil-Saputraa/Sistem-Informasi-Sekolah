<?php
include "koneksi.php";

$id_anggota=$_POST['id_anggota'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_anggota=$_POST['nama_anggota'];
$level=$_POST['level'];

$sql=mysqli_query($koneksi, "insert into anggota values('','$username','$password','$nama_anggota','$level')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="dashboard_admin.php?url=anggota";
	</script>
	<?php
}
?>