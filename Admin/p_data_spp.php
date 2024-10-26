<?php
include "koneksi.php";

$id_spp=$_POST['id_spp'];
$tahun=$_POST['tahun'];
$nominal=$_POST['nominal'];


$sql=mysqli_query($koneksi, "insert into spp values('','$tahun','$nominal')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="dashboard_admin.php?url=spp";
	</script>
	<?php
}
?>