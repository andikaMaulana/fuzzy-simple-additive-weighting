<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="judul">
	<h2>Selamat Datang di Aplikasi Perhitungan Metode Simple Addictive Weighting</h2>
</div>
<div class="container white-coral">
	<br>
	<div class="soal" >
		<form action="upload.php" method="post" enctype="multipart/form-data" >
			<p style="text-align: justify;padding: 15px;">Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut (Fishburn, 1967) (MacCrimmon, 1968).Metode SAW membutuhkan proses normalisasi matriks keputusan (X) ke suatu skala yang dapat diperbandingkan dengan semua rating alternatif yang ada.</p>
			<p style="text-align: justify;padding: 15px;">Metode ini merupakan metode yang paling terkenal dan paling banyak digunakan dalam menghadapi situasi Multiple Attribute Decision Making (MADM). MADM itu sendiri merupakan suatu metode yang digunakan untuk mencari alternatif optimal dari sejumlah alternatif dengan kriteria tertentu. Metode SAW ini mengharuskan pembuat keputusan menentukan bobot bagi setiap atribut. Skor total untuk alternatif diperoleh dengan menjumlahkan seluruh hasil perkalian antara rating (yang dapat dibandingkan lintas atribut) dan bobot tiap atribut. Rating tiap atribut haruslah bebas dimensi dalam arti telah melewati proses normalisasi matriks sebelumnya.</p>
		    <label style="margin-left: 25px;" for="file">Masukan dataset untuk perhitungan :</label><br>
		    <center>
	    <input type="file" name="data_csv" id="data" formenctype="multipart/form-data" style="width: 50%;margin-left: 0px;" required><br>
		    </center>
		    <div style="width: 100%;display: block;text-align: center;">
		    	<button type="submit" name="submit" class="btn btn-primary">Upload</button>
		    </div>
		</form>
	</div>
	<br>
<br>
</div>
</body>
</html>