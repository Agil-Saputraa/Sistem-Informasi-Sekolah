<?php

include "koneksi.php";

$nisn=$_GET['nisn'];

$sql=mysqli_query($koneksi, "delete from siswa where nisn='$nisn'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Di Delete');
		window.location="dashboard_admin.php?url=siswa";
	</script>
	<?php
}
?>

