<?php
session_start();

include "koneksi.php";

$nisn=$_POST['nisn'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$id_kelas=$_POST['id_kelas'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$id_spp=$_POST['id_spp'];

$sql=mysqli_query($koneksi, "insert into siswa values ('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')");



if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="dashboard_admin.php?url=siswa";
	</script>
	<?php
}
?>
