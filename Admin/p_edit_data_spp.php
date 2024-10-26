<?php
include "koneksi.php";

$id_spp=$_POST['id_spp'];
$tahun=$_POST['tahun'];
$nominal=$_POST['nominal'];


$sql=mysqli_query($koneksi, "update spp set tahun='$tahun', nominal='$nominal'  where id_spp='$id_spp'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil DiUpdate');
		window.location="dashboard_admin.php?url=spp";
	</script>
	<?php
}
?>