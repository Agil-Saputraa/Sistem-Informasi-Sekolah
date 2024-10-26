<?php

include "koneksi.php";

$id_pembayaran=$_GET['id_pembayaran'];

$sql=mysqli_query($koneksi, "delete from pembayaran where id_pembayaran='$id_pembayaran'");


if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Di Delete');
		window.location="bayar.php";
	</script>
	<?php
}
?>

