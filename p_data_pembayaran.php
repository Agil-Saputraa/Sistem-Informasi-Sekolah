<?php
session_start();

include "koneksi.php";

$id_pembayaran=$_POST['id_pembayaran'];
$id_anggota=$_POST['id_anggota'];
$nisn=$_POST['nisn'];
$tanggal_bayar=date('Y/m/d');
$bulan_dibayar=$_POST['bulan_dibayar'];
$tahun_dibayar=$_POST['tahun_dibayar'];
$id_spp=$_POST['id_spp'];
$jumlah_bayar=$bulan_dibayar*$id_spp;


$sql=mysqli_query($koneksi, "insert into pembayaran values ('','$id_anggota','$nisn','$tanggal_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp','$jumlah_bayar')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan');
		window.location="bayar.php";
	</script>
	<?php
}
?>