<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
</head>
<body>
	<h2>Hasil Perhitungan</h2>
	<?php
		$beban = $_POST['beban'];
		$jarak = $_POST['jarak'];
		$kecepatan = $_POST['kecepatan'];

		// menghitung waktu tempuh
		$waktu_tempuh = ($jarak / $kecepatan); 

		// mwnghitung konsumsi bensin
		$konsumsi_bensin = ($jarak / 52.60) * $beban / $kecepatan;

		// mwnghitung total biaya bensin
		$harga_bensin = ($konsumsi_bensin * 13500);
	?>

	<p>Waktu Tempuh: <?php echo round($waktu_tempuh) ?> jam</p>
	<p>Konsumsi Bensin: <?php echo round($konsumsi_bensin) ?> liter</p>
	<p>Total Biaya Bensin: Rp <?php echo round($harga_bensin)  ?></p>
	<br>
	<p>*Biaya bensin merupakan harga asli dari konsumsi bensin sebelum pembulatan, dimana konsumsi bensin telah dibulatlan.</p>
</body>
</html>
