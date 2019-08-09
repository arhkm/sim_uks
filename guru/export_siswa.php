<?php 
	$tanggal = date('d-m-Y');

	header("Content-Disposition: attachment; filename = $tanggal-siswa-sakit.xls");
	header("Content-Type: application/vnd-ms-excel");


	include "laporan_siswa.php";
 ?>