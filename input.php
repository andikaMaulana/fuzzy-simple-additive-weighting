<!DOCTYPE html>
<html>
<head>
	<title>Masukan Nilai Bobot</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="judul">
		<h2>Aplikasi Perhitungan Metode SAW(Simple Addictive Weighting)</h2>
	</div>
	<div class="container white-coral">
		<br>
				<form method="POST" action="hasil.php" class="form blue-dark" style="text-align: center;">
					<h4>Masukan Bobot pada masing-masing kriteria : </h4>
					<?php
					include 'proses.php';
					$ln=sizeof($kriteria[0]);
					for ($i=0; $i < $ln; $i++) {
						$num=$i+1; 
						echo "<div class=\"form-group\">";
						echo "C$num <input type=\"text\" name=\"C".$num."\" required>&nbsp;<br> ";
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status : \t\t<input type=\"radio\" name=\"kondisi$i\" value=\"min\"> Min&nbsp;";
						echo "<input type=\"radio\" name=\"kondisi$i\" value=\"max\"> Max&nbsp;<br>";
						echo "</div>";
					}
					?>
					<br>		
					<button type="submit" name="submit" class="btn btn-primary">Proses</button>
				</form>
				<br>
	</div>
</body>
</html>