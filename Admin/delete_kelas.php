<?php

include "koneksi.php";

$id_kelas=$_GET['id_kelas'];

$sql=mysqli_query($koneksi, "delete from kelas where id_kelas='$id_kelas'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Di Delete');
		window.location="dashboard_admin.php?url=kelas";
	</script>
	<?php
}
?>
