<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		th{
			text-align: center;
		}
	</style>
	<script type="text/javascript">
		function cetak() {
			window.print();
		}
	</script>
</head>
<body>
<div class="judul">
	<h2>Aplikasi Perhitungan Metode Simple Addictive Weighting</h2>
</div>
<div class="container">
	<br>
	<div class="alert alert-secondary">
		<a href="index.php">&nbsp;Kembali Ke Menu Utama</a>
	</div>
	<?php
	$_POST['submit']=1;
	if(isset($_POST['submit'])){
		include 'proses.php';
		$data=$_POST;
		array_pop($data);
		$i=0;
		$status=array();
		$bobot=array();
		foreach ($data as $d) {
		if($i==0)
			{array_push($bobot, $d);$i=1;}
		else
			{array_push($status, $d); $i=0;}
		}
		//menghitung data array dan di ubah ke bentuk normalisasi
		$dataNormalisasi=normalisasi($kriteria,$status);
		//mengurutkan data dari hasil normalisasi ke bentuk perangkingan
		$rank=perangkingan($dataNormalisasi,$alternatif,$bobot);
		?>
		<h4>Data Inputan</h4>
		<table class="table table-sm table-hover" border="1">
			<?php
			$ln=sizeof($kriteria[0]);
			echo "<thead class=\"thead-dark grey\" >";
			echo "<tr><th>Alternatif</th><th colspan=\"$ln\" >Kriteria</th><tr>"; 
			echo "<tr><th></th>";
			$i=1;
			foreach ($kriteria[0] as $val) {
				echo "<th>C$i</th>";
				$i+=1;
			}
			echo "</tr>";
			echo "</thead>";
			$i=0;
			foreach ($kriteria as $val) {
				echo "<tr>";
				echo "<td>$alternatif[$i]</td>";
				foreach ($val as $val2) {
					echo "<td>$val2</td>";
				}
				$i+=1;
				echo "</tr>";
			}
			?>
		</table>
		<h4>Hasil Normailsasi</h4>
		<table class="table table-sm table-hover" border="1">
			<?php 
			echo "<thead class=\"thead-dark grey\" >"; 
			$i=1;
			foreach ($kriteria[0] as $val) {
				echo "<th>C$i</th>";
				$i+=1;
			}
			echo "</tr>";
			echo "</thead>";
			foreach ($dataNormalisasi as $val) {
			echo "<tr>";
			foreach ($val as $val2) {
				echo "<td>$val2</td>";
			}
			echo "</tr>";
		}
			?>
		</table>
		<h4>Hasil Perangkingan</h4>
			<table class="table table-sm table-hover" border="1">
			<?php 
			echo "<thead class=\"thead-dark grey\" ><th>No</th><th>Nilai</th><th>Alternatif</th></thead>";
			 $no=1;
		foreach ($rank as $val) {
			echo "<tr>";
			echo "<td>$no</td>";
			foreach ($val as $val2) {
				echo "<td>$val2</td>";
			}
			$no+=1;
			echo "</tr>";
		}
		?></table>
		<?php
		$terbaik=$rank[0][sizeof($rank[0])-1];
		?>
		<div class="alert alert-success">
		nilai tertinggi dari table yaitu data dari : <strong><?=$terbaik?></strong>
	</div>
		<?php
	}else
	echo "<span class=\"badge badge-danger\">data masih ada yang kosong</span> <br><a href=\"input.php\">Kembali input Data</a><br>";
	?>
	<button class="btn btn-success" onclick="cetak()">PRINT</button><br>
	<br>
</div>
</body>
</html>