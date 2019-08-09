<style>
	@media print {
		.print{
			display: none;
		}
	}
</style>

<?php 
	$tanggal = date('y-m-d');

	header("Content-Disposition: attachment; filename = $tanggal-laporan-kuesioner.xls");
	header("Content-Type: application/vnd-ms-excel");


	include "cetak.php";
 ?>