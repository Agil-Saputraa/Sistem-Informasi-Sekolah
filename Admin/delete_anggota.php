<?php

include "koneksi.php";

$id_anggota=$_GET['id_anggota'];

$sql=mysqli_query($koneksi, "delete from anggota where id_anggota='$id_anggota'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Di Delete');
		window.location="dashboard_admin.php?url=anggota";
	</script>
	<?php
}
?>

