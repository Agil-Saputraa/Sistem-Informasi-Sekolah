<?php
include "koneksi.php";

$id_anggota=$_POST['id_anggota'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_anggota=$_POST['nama_anggota'];
$level=$_POST['level'];

$sql=mysqli_query($koneksi, "update anggota set username='$username', password='$password', nama_anggota='$nama_anggota', level='$level' where id_anggota='$id_anggota'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil DiUpdate');
		window.location="dashboard_admin.php?url=anggota";
	</script>
	<?php
}
?>