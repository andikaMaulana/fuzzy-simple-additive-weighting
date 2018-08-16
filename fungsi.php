<?php
//memisahakan array dari dataset ke array alternatif dan array kriteria
function convertToArray(){
	$data=array();
	$file = fopen('file/data.csv', 'r');
	while (($line = fgetcsv($file)) !== FALSE) {
		$tmp='';
		foreach ($line as $val) {
			$tmp=$val;
		}
		$arr=explode(";",$val);
		array_push($data, $arr);
	}
	fclose($file);
	return $data;
}
function getKriteria($data){
	$kriteria=array();
	foreach ($data as $key) {
		$tmp=array();
		for($i=1; $i<sizeof($key);$i++)
			array_push($tmp, $key[$i]);
		array_push($kriteria, $tmp);
	}
	return $kriteria;
}
function getAlternatif($data){
	$alternatif=array();
	foreach ($data as $key)
		array_push($alternatif, $key[0]);
	return $alternatif;
}
function getMin($kriteria){
	$data=array();
	for($i=0; $i<sizeof($kriteria[0]);$i++){
		$tmp=array();
		for ($j=0; $j <sizeof($kriteria) ; $j++) 
			array_push($tmp, $kriteria[$j][$i]);
		$minimum=min($tmp);
		array_push($data, $minimum);
	}
	return $data;
}
function getMax($kriteria){
	$data=array();
	for($i=0; $i<sizeof($kriteria[0]);$i++){
		$tmp=array();
		for ($j=0; $j <sizeof($kriteria) ; $j++) 
			array_push($tmp, $kriteria[$j][$i]);
		$minimum=max($tmp);
		array_push($data, $minimum);
	}
	return $data;
}
function normalisasi($data,$status){
	$normalisasi=array();
	for($i=0; $i<sizeof($data);$i++){
		$tmp=array();
		for ($j=0; $j <sizeof($data[0]) ; $j++){
			if($status[$j]=="max"){
				$valMax=getMax($data);
				$val=$data[$i][$j]/$valMax[$j];
				array_push($tmp, $val);
			}elseif($status[$j]=="min"){
				$valMin=getMin($data);
				$val=$valMin[$j]/$data[$i][$j];
				array_push($tmp, $val);
			}
		}
		array_push($normalisasi, $tmp);
	}
	return $normalisasi;	
}
function perangkingan($data,$alternatif,$bobot){
	$rangking=array();
	for($i=0; $i<sizeof($data);$i++){
		$tmp=0;
		for ($j=0; $j <sizeof($data[0]) ; $j++)
			$tmp+=($bobot[$j]*$data[$i][$j]);
		array_push($rangking, array($tmp,$alternatif[$i]));
	}
	rsort($rangking);
	return $rangking;
}
?>