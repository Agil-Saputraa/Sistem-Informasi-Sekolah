<?php


include "../koneksi.php";

$nisn=$_POST['nisn'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$id_kelas=$_POST['id_kelas'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$id_spp=$_POST['id_spp'];

$sql=mysqli_query($koneksi, "update siswa set nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_telp='$no_telp', id_spp='$id_spp' where nisn='$nisn'");




if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil DiUpdate');
		window.location="dashboard_admin.php?url=siswa";
	</script>
	<?php
}
?>