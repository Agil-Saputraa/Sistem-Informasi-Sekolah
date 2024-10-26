<?php
include "koneksi.php";

$id_kelas=$_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];
$kompetensi_keahlian=$_POST['kompetensi_keahlian'];


$sql=mysqli_query($koneksi, "update kelas set nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian'  where id_kelas='$id_kelas'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil DiUpdate');
		window.location="dashboard_admin.php?url=kelas";
	</script>
	<?php
}
?>