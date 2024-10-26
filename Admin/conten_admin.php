<?php

if (isset($_GET['url'])) 
{
	$url=$_GET['url'];

	switch ($url) 
	{
		
		case 'siswa';
		include 'siswa.php';
		break;
		case 'data_siswa';
		include 'data_siswa.php';
		break;
		case 'edit_siswa';
		include 'edit_siswa.php';
		break;
		case 'delete_siswa';
		include 'delete_siswa.php';
		break;




		case 'anggota';
		include 'anggota.php';
		break;
		case 'data_anggota';
		include 'data_anggota.php';
		break;
		case 'edit_anggota';
		include 'edit_anggota.php';
		break;
		case 'delete_anggota';
		include 'delete_anggota.php';
		break;



		case 'kelas';
		include 'kelas.php';
		break;
		case 'data_kelas';
		include 'data_kelas.php';
		break;
		case 'edit_kelas';
		include 'edit_kelas.php';
		break;
		case 'delete_kelas';
		include 'delete_kelas.php';
		break;


		case 'spp';
		include 'spp.php';
		break;
		case 'data_spp';
		include 'data_spp.php';
		break;
		case 'edit_spp';
		include 'edit_spp.php';
		break;
		case 'delete_spp';
		include 'delete_spp.php';
		break;


		case 'data_laporan';
		include 'data_laporan.php';
		break;
		


		case 'histori';
		include 'histori.php';
		break;
		



	}
}else{
	?>
	<font face="courier new">
	<h1>Selamat Datang Di Dashboard Admin aplikasi Pembayaran SPP <br><br>

	Anda Login Sebagai : </h1><h2><b><?php echo $_SESSION['nama_anggota']; ?>


<?php
}
?>
