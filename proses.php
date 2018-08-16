<?php
	include 'fungsi.php';
	//mengubah hasil upload ke database array
	$data=convertToArray();
	//mengelompokan kriteria ke array
	$kriteria=getKriteria($data);
	//mengelompokan alternatif ke array
	$alternatif=getAlternatif($data);
	//besar bobot
?>