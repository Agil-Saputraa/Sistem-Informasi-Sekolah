<?php

include "koneksi.php";

$id_spp=$_GET['id_spp'];

$sql=mysqli_query($koneksi, "delete from spp where id_spp='$id_spp'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Di Delete');
		window.location="dashboard_admin.php?url=spp";
	</script>
	<?php
}
?>
