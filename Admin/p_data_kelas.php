<?php

include "koneksi.php";

$id_kelas=$_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];
$kompetensi_keahlian=$_POST['kompetensi_keahlian'];


$sql=mysqli_query($koneksi, "insert into kelas values('','$nama_kelas','$kompetensi_keahlian')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="dashboard_admin.php?url=kelas";
	</script>
	<?php
}
?>